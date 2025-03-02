<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dtos\ContactMessageDto;
use App\Http\Requests\Contact\StoreContactMessageRequest;
use App\Services\ContactMessageService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

final class ContactMessageController extends BaseController
{
    public function __construct(
        protected ContactMessageService $contactMessageService,
    ) {
        parent::__construct();
    }

    public function create(): View
    {
        return view('contact.create', [
            'title' => trans('Contact Us'),
        ]);
    }

    public function store(StoreContactMessageRequest $request): RedirectResponse
    {
        $dto = new ContactMessageDto(
            $request->input('name'),
            $request->input('email'),
            $request->input('subject'),
            $request->input('message'),
            $request->input('copy_sender'),
        );

        $stored = $this->contactMessageService->store($dto);

        if ($stored) {
            $status = trans('Your message has been sent successfully.');

            return redirect()
                ->route('contact.thanks')
                ->with('status', $status);
        } else {
            $status = 'Sorry, there was a problem sending your message. Please try again.';

            return back()
                ->withInput()
                ->with('status', $status);
        }
    }

    public function thanks(): View
    {
        return view('contact.thanks', [
            'title' => trans('Thanks'),
        ]);
    }
}
