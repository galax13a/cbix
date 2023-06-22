@section('title', __('Supports'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent">
                    <x-btnmore />
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
									<td class="text-bold text-capitalize" >
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
										wire:click="edit({{$row->id}})"
										@click="openwin36('updateDataModal')"
										>
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
												<x-slot name="id_editar">{{$row->id}}
													<x-slot name="x_delete">delete-model</x-slot>
												</x-slot>
											</x-btncrud>						
									</td>
								</tr>
								@empty
                                    <tr>
                                        <td class="text-center" colspan="100%">

                                            <p><strong>¡Ponte en contacto con nosotros!</strong></p>

											<button class="btn btn-dark btn-sm rounded-3 shadow-sm"  @click="openwin36('createDataModal')">
												👉🏽 Support Message
												</button>

                                            <p>Si tienes alguna pregunta, sugerencia o simplemente quieres ponerte en
                                                contacto con nosotros, estaremos encantados de ayudarte.</p>

                                            <p>Nuestro equipo de soporte está disponible para responder tus consultas y
                                                brindarte la asistencia que necesites. Si tienes algún problema técnico,
                                                alguna duda sobre nuestros servicios o simplemente deseas hacernos
                                                llegar tus comentarios, no dudes en contactarnos.</p>

                                            <p>Puedes comunicarte con nuestro equipo de soporte a través de los
                                                siguientes medios:</p>

                                            <ul>
                                                <li><strong>Correo electrónico:</strong> info@botchatur.com</li>
                                                <li><strong>Teléfono:</strong> +1 123 456 7890</li>
                                                <li><strong>Dirección:</strong> Calle Principal, Ciudad, País</li>
                                            </ul>

                                            <p>Si prefieres recibir asistencia de manera más rápida y eficiente, te
                                                recomendamos crear un nuevo ticket en nuestra plataforma de soporte en
                                                línea. Para ello, visita nuestro sitio web en <a
                                                    href="https://www.botchatur.com/support"><strong>www.botchatur.com/support</strong></a>
                                                y selecciona la opción "Crear nuevo ticket". Completa el formulario con
                                                los detalles de tu consulta y uno de nuestros agentes de soporte se
                                                comunicará contigo a la brevedad.</p>

                                            <p>¡Estamos aquí para ayudarte y asegurarnos de que tengas una experiencia
                                                satisfactoria con nuestros servicios! No dudes en contactarnos en
                                                cualquier momento.</p>

                                            <p><strong>Equipo de Botchatur</strong></p>


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
