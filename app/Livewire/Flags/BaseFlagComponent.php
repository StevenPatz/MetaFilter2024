<?php

declare(strict_types=1);

namespace App\Livewire\Flags;

use App\Repositories\FlagReasonRepositoryInterface;
use App\Services\FlagService;
use App\Traits\AuthStatusTrait;
use App\Traits\FlagTrait;
use App\Traits\LoggingTrait;
use Livewire\Component;

class BaseFlagComponent extends Component
{
    use AuthStatusTrait;
    use FlagTrait;
    use LoggingTrait;

    public array $flagReasons = [];
    public string $iconPath;
    public bool $flagged;
    public int $flagCount;
    public string $note = '';
    public int $authorizedUserId;
    public int $selectedReasonId;
    public bool $userFlagged = false;
    public bool $showForm = false;

    protected FlagReasonRepositoryInterface $flagReasonRepository;
    protected FlagService $flagService;

    public function __construct(
        FlagReasonRepositoryInterface $flagReasonRepository,
        FlagService $flagService
    ) {
        $this->flagReasonRepository = $flagReasonRepository;
        $this->flagService = $flagService;

        $this->authorizedUserId = $this->getAuthorizedUserId();
        $this->flagReasons = $this->flagReasonRepository->getDropdownValues('text');
    }
}
