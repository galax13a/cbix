@section('title', __('Unbans'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent d-none">
                    <x-btnmore />
                </div>

                <div class="card-body">
                    @include('livewire.unbans.modals')

                    <div class="p-2 shadow m-2 rounded-4">
                        <p>
                            <strong>¡Desbloquea tu cuenta ahora!</strong>
                        </p>

                        <p>
                            Si tu cuenta ha sido bloqueada y deseas desbloquearla para volver a acceder, simplemente
                            sigue estos pasos:
                        </p>

                        <ol>
                            <li>
                                Completa el siguiente 
								formulario
								<a class="custom-link p-1 shadow rounded-3 bg-primary text-white " href="javascript:void(0);" onclick="document.querySelector('#btn-new').click();">Form</a>

								 de solicitud de desbloqueo.
                            </li>
                            <li>
                                Proporciona la información requerida, como tu nombre de usuario y su motivo .
                            </li>
                            <li>
                                Nuestro equipo revisará tu solicitud de desbloqueo y tomará las medidas necesarias para
                                desbloquear tu cuenta lo antes posible.
                            </li>
                            <li>
                                Una vez que tu cuenta esté desbloqueada, recibirás una notificación por correo
                                electrónico con instrucciones adicionales para acceder nuevamente.
                            </li>
                        </ol>

                        <p>
                            Si tienes alguna pregunta adicional o necesitas asistencia, no dudes en contactarnos a
                            través de nuestra página de <strong>soporte</strong>.
                        </p>

                        <p>
                            ¡Esperamos poder ayudarte a recuperar el acceso a tu cuenta!
                        </p>


                    </div>

                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="thead">
                                <tr class="text-center">
                                    <td>#</td>
                                    <th>Sent By</th>
                                    <th>Support</th>
                                    <th>Comment</th>
                                    <th>Reply </th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th class="text-center thead">Command</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($unbans as $row)
                                    <tr class="text-center">
                                        <td>
                                            <li
                                                class="shadow-sm rounded-3 p-2 text-danger m-1 fas fa-user2-secret fs-6">
                                                <span class=" badge text-dark ">{{ $loop->iteration }}</span>
                                            </li>
                                        </td>
                                        <td data-record="{{ $row->id }}">{{ $row->user_sent_by->name }}</td>
                                        <td>
                                            <strong>
                                                {{ $row->user_resolved_by->name ?? '🟨 Without resolving' }}
                                            </strong>
                                        </td>
                                        <td>
                                            <span class="d-inline-block text-truncate" style="max-width: 250px;">
                                                {{ $row->comment }}
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                {{ $row->reply_comment }}
                                            </span>

                                        </td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            <x-comstatus>
                                                <x-slot name="status">{{ $row->status ?? 'pending' }}</x-slot>
                                            </x-comstatus>

                                        </td>
                                        <td width="90">
                                            <x-btncrud>
                                                <x-slot name="id_editar">{{ $row->id }}</x-slot>
                                            </x-btncrud>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="100%">No data Found </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="float-end">{{ $unbans->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
