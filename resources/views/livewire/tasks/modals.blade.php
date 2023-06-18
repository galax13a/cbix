<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel"> New Task</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="command"></label>
                        <input wire:model.defer="command" type="text" class="form-control" id="command" placeholder="Command">@error('command') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="interval">Intervalo:</label>
                        <select wire:model="interval" id="interval" class="form-control" required>
                            <option value="">Seleccionar intervalo</option>
                            <option value="minutely">Cada minuto</option>
                            <option value="every_5_minutes">Cada 5 minutos</option>
                            <option value="every_30_minutes">Cada 30 minutos</option>
                            <option value="hourly">Cada hora</option>
                            <option value="daily">Cada día</option>
                            <option value="weekly">Cada semana</option>
                            <option value="biweekly">Cada 15 días</option>
                            <option value="monthly">Cada mes</option>
                        </select>
                         </div>
                    <div class="form-group">
                        <label for="last_executed_at"></label>
                        <input wire:model.defer="last_executed_at" type="text" class="form-control" id="last_executed_at" placeholder="Last Executed At">@error('last_executed_at') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">status:</label>
                        <select wire:model.defer="status" id="status" class="form-control" required>
                            <option value="start">Play</option>
                            <option value="stop">Stop</option>
                        </select>
                         </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-store"  type="button" wire:click.prevent="store()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Task</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="name"></label>
                        <input wire:model.defer="name" type="text" class="form-control" id="name" placeholder="Name">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="command"></label>
                        <input wire:model.defer="command" type="text" class="form-control" id="command" placeholder="Command">@error('command') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <select wire:model="interval" id="interval" class="form-control" required>
                            <option value="">Seleccionar intervalo</option>
                            <option value="minutely">Cada minuto</option>
                            <option value="every_5_minutes">Cada 5 minutos</option>
                            <option value="every_30_minutes">Cada 30 minutos</option>
                            <option value="hourly">Cada hora</option>
                            <option value="daily">Cada día</option>
                            <option value="weekly">Cada semana</option>
                            <option value="biweekly">Cada 15 días</option>
                            <option value="monthly">Cada mes</option>
                        </select>
                       </div>
                    <div class="form-group">
                        <label for="last_executed_at"></label>
                        <input wire:model.defer="last_executed_at" type="text" class="form-control" id="last_executed_at" placeholder="Last Executed At">@error('last_executed_at') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                         <label for="status">status:</label>
                        <select wire:model.defer="status" id="status" class="form-control" required>
                            <option value="start">Iniciar</option>
                            <option value="stop">Detener</option>
                        </select>
                  
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update" type="button" wire:click.prevent="update()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>
       </div>
    </div>
</div>
