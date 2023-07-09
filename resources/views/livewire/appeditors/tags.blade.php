<div wire:ignore.self class="modal fade" id="tagsDataModal" data-bs-backdrop="static"  role="dialog" aria-labelledby="tagsDataModalDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tagsDataModalLabel"> New Tag</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="name_tag"></label>
                        <input wire:model="name_tag" type="text" class="form-control" id="name_tag" placeholder="Name Tag">@error('name_tag') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>

            <div class="container m-1 p-2 shadow ">                
                <strong>#Tags::</strong>
                @foreach ($tags as $tag)
                <ul class="tags-all m-1">
                    <li
                         wire:click='get_tags({{$tag->id}})'
                    >
                        <a class="custom-link decora" href="javascript:void(0);">
                            {{$tag->name}}
                        </a>
                    </li>                    
                  </ul>
                @endforeach
            </div>

            <div class="modal-footer">
                <button id="btn-close" type="button" wire:click.prevent="cancel()" class="btn btn-icon shadow-lg m-2" data-bs-dismiss="modal">❌ Close</button>
                <button id="btn-update"  type="button" wire:click.prevent="store_tag()" class="btn btn-icon shadow-lg m-2">Save ✅</button>
            </div>

      
        </div>
    </div>
</div>