<?php

declare(strict_types=1);

namespace App\Livewire\Forms;

use App\Enums\LivewireEventEnum;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Comment;
use App\Traits\AuthStatusTrait;
use Livewire\Form;

final class CommentForm extends Form
{
    use AuthStatusTrait;

    public Comment $comment;
    public int $authorizedUserId;
    public ?int $userId = null;
    public string $text = '';
    public int $postId = 0;
    public ?int $parentId = null;
    public ?object $parent = null;

    public function mount(): void
    {
        $this->authorizedUserId = $this->getAuthorizedUserId();
    }

    public function setComment(Comment $comment): void
    {
        $this->text = $comment->text;
        $this->postId = $comment->post_id;
        $this->parentId = $comment->parent_id;
    }

    protected function rules(): array
    {
        return (new StoreCommentRequest())->rules();
    }

    public function store(): void
    {
        $this->validate();

        Comment::create([
            'text' => $this->text,
            'post_id' => $this->postId,
            'parent_id' => $this->parentId,
            'user_id' => $this->authorizedUserId,
        ]);

        $this->text = '';

        $this->flashMessage(LivewireEventEnum::CommentStored->value);
    }

    public function update(): void
    {
        if ($this->authorizedUserId !== $this->comment->user_id) {
            return;
        }

        $this->validate();

        $this->comment->update([
            'text' => $this->text,
        ]);

        $this->parent->isEditing = false;

        $this->flashMessage(LivewireEventEnum::CommentUpdated->value);
    }

    private function flashMessage(string $message): void
    {
        session()->flash('message', trans($message));
    }
}
