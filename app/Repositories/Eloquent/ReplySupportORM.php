<?php
namespace App\Repositories\Eloquent;

use App\DTO\Replies\CreateReplyDTO;
use App\Models\ReplySupport;
use App\Models\Support;
use App\Repositories\Contracts\ReplyRepositoryInterface;
use App\Repositories\Contracts\SupportRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use stdClass;

class ReplySupportORM implements ReplyRepositoryInterface
{
    public function __construct(
        protected ReplySupport $model,
        protected SupportRepositoryInterface $supportModel
    ) {}

    public function getAllBySupportId(string $supportId): array {
        $replies = $this->model
                        ->with(['user', 'support'])
                        ->where('support_id', $supportId)->get();

        return $replies->toArray();
    }

    public function createNew(CreateReplyDTO $dto): stdClass {
        $reply = $this->model->create([
            'content' => $dto->content,
            'support_id' => $dto->supportId,
            'user_id' => Auth::user()->id
        ]);
        
        $supportOwnerEmail = $this->findSupportOwnerEmail($reply->id);
        $reply = $reply->toArray();
        $reply['support_email_owner'] = $supportOwnerEmail;

        return (object) $reply;
    }

    public function delete(string $id): bool {
        if (!$reply = $this->model->find($id)){
            return false;
        }
        
        return (bool) $reply->delete();
    }

    protected function findSupportOwnerEmail(string $id) : string{
        $reply = $this->model
                    ->with('support.user')
                    ->find($id);

        if (!$reply) {
            return null;
        }

        return $reply->support['user']['email'];
    }
}

?>