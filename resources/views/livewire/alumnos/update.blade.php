<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="apellido"></label>
                <input wire:model="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nombres"></label>
                <input wire:model="nombres" type="text" class="form-control" id="nombres" placeholder="Nombres">@error('nombres') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="dni"></label>
                <input wire:model="dni" type="text" class="form-control" id="dni" placeholder="Dni">@error('dni') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_nac"></label>
                <input wire:model="fecha_nac" type="text" class="form-control" id="fecha_nac" placeholder="Fecha Nac">@error('fecha_nac') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="calle"></label>
                <input wire:model="calle" type="text" class="form-control" id="calle" placeholder="Calle">@error('calle') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="numero"></label>
                <input wire:model="numero" type="text" class="form-control" id="numero" placeholder="Numero">@error('numero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="manzana"></label>
                <input wire:model="manzana" type="text" class="form-control" id="manzana" placeholder="Manzana">@error('manzana') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="casa"></label>
                <input wire:model="casa" type="text" class="form-control" id="casa" placeholder="Casa">@error('casa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="depto"></label>
                <input wire:model="depto" type="text" class="form-control" id="depto" placeholder="Depto">@error('depto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="barrio"></label>
                <input wire:model="barrio" type="text" class="form-control" id="barrio" placeholder="Barrio">@error('barrio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="cp"></label>
                <input wire:model="cp" type="text" class="form-control" id="cp" placeholder="Cp">@error('cp') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ciudad"></label>
                <input wire:model="ciudad" type="text" class="form-control" id="ciudad" placeholder="Ciudad">@error('ciudad') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="provincia"></label>
                <input wire:model="provincia" type="text" class="form-control" id="provincia" placeholder="Provincia">@error('provincia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="celular"></label>
                <input wire:model="celular" type="text" class="form-control" id="celular" placeholder="Celular">@error('celular') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="mail"></label>
                <input wire:model="mail" type="text" class="form-control" id="mail" placeholder="Mail">@error('mail') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="obs"></label>
                <input wire:model="obs" type="text" class="form-control" id="obs" placeholder="Obs">@error('obs') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="baja"></label>
                <input wire:model="baja" type="text" class="form-control" id="baja" placeholder="Baja">@error('baja') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="genero"></label>
                <input wire:model="genero" type="text" class="form-control" id="genero" placeholder="Genero">@error('genero') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            </div>
       </div>
    </div>
</div>
