@section('title', __('Supports'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore>
                        <x-slot:topico>
                            Ticket
                        </x-slot>

                    </x-btnmore>
                </div>

                <div class="card-body">
                    @include('livewire.supports.modals')
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm">
                            <thead class="thead text-center">
                                <tr>
                                    <td>#</td>
                                    <th>Name</th>
                                    <th>Topic</th>
                                    <th>Me.</th>
                                    <th>Support</th>
                                    <th>Message</th>
                                    <th>Support Message</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($supports as $row)
                                    <tr>
                                        <td>
                                            <li
                                                class="shadow-sm rounded-3 p-1 text-danger m-1 fas fa-user2-secret fs-6">
                                                <span class=" badge text-dark ">{{ $loop->iteration }}</span>
                                            </li>
                                        </td>
                                        <td class="text-bold text-capitalize">
                                            <strong class="p-1 m-1 shadow rounded-3">
                                                {{ $row->type_support }}
                                            </strong>
                                        </td>
                                        <td data-record="{{ $row->id }}">
                                            <strong class="text-uppercase">
                                                {{ $row->name }}
                                            </strong>
                                        </td>
                                        <td class="text-bold">
                                            <strong>
                                                {{ $row->user_sent_by->name }}
                                            </strong>
                                        </td>
                                        <td>
                                            {{ $row->user_support->name ?? '⭕️Resolving' }}
                                        </td>
                                        <td>{{ $row->message }}</td>
                                        <td>

                                            @if ($row->reply_message)
                                                <p>{{ $row->reply_message }}</p>
                                            @else
                                                <button class="btn btn-dark btn-sm rounded-3 shadow-sm"
                                                    wire:click="edit({{ $row->id }})"
                                                    @click="openwin36('updateDataModal')">
                                                    👉🏽Reply
                                                </button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <x-comstatus>
                                                <x-slot name="status">{{ $row->status ?? 'pending' }}</x-slot>
                                            </x-comstatus>
                                        </td>
                                        <td class="text-center">
                                            <x-compriority>
                                                <x-slot name="priority">{{ $row->priority ?? 'low' }}</x-slot>
                                            </x-compriority>
                                            {{ $row->priority }}
                                        </td>
                                        <td width="90">
                                            <x-btncrud>
                                                <x-slot name="id_editar">{{ $row->id }}
                                                    <x-slot name="x_delete">delete-model</x-slot>
                                                </x-slot>
                                            </x-btncrud>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="100%">

                                            <p><strong>Contact us!</strong></p>

                                            <button class="btn btn-dark btn-sm rounded-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#createDataModal"
                                                @click="openwin36('createDataModal')">
                                                👉🏽 Support Message
                                            </button>
                                            If you have any questions, suggestions or simply want to contact us, we will
                                            be happy to help you.

                                            Our support team is available to answer your questions and provide you with
                                            the assistance you need. If you have any technical problems, any questions
                                            about our services or simply want to send us your comments, do not hesitate
                                            to contact us.

                                            You can contact our support team through the following means:

                                            Email: support@botchatur.com
                                            If you prefer to receive assistance faster and more efficiently, we
                                            recommend creating a new ticket on our online support platform. To do this,
                                            visit our website at www.botchatur.com/app/support and select the "Create
                                            new ticket" option. Complete the form with the details of your query and one
                                            of our support agents will contact you shortly.

                                            We are here to help you and make sure you have a satisfactory experience
                                            with our services! Feel free to contact us at any time.

                                            Botchatur Team


                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-end">{{ $supports->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
