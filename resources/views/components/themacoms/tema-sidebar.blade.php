<div>             
      <section>
        <div x-data="{ open_sidebar_wire: false }" id="sidebar-thema" wire:key='sidebarthema'>
        <!-- Sidebar -->
        <div :class="{ 'd-none': !open_sidebar_wire, '': open_sidebar_wire }" class="border-right sidebar-sticky floating-menu" id="sidebar-wrapper">
            <div class="list-group list-group-flush rounded-2">
                <a href="{{ url('/home') }}"  class="list-group-item list-group-item-action">Dashboard</a>
                <a href="javascript:void(0)" title="Save Thema" onclick="dispatchLoadingEvent('hourglass', 1000); window.scrollTo(0,0); saveEditorData();" class="list-group-item list-group-item-action">🎯 Save</a>
                <a href="?themecreate=new" title="New Document" class="list-group-item list-group-item-action">
                    <i class="bi bi-plus-square-dotted"></i>
                    <span>New Thema</span>
                </a>
                
                <a href="javascript:void(0)" title="Reload Thema" onclick="reloadPage();" class="list-group-item list-group-item-action">
                    <i class="bi bi-arrow-clockwise"></i>
                    <span>Reload</span>
                </a>
                
                <!-- resources/views/livewire/language-toggle.blade.php -->

                <a href="javascript:void(0)" title="SEO thema" class="list-group-item list-group-item-action text-warning">
                    <i class="bi bi-card-checklist fs-5"> </i> <span>Seo Thema</span>
                </a>
                
                <a href="javascript:void(0)" title="Traductor thema" class="list-group-item list-group-item-action text-info">
                    <i class="bi bi-badge-tm fs-5"></i> <span>Traductor thema</span>
                </a>
                
                <a href="javascript:void(0)" title="Online Thema" class="list-group-item list-group-item-action">
                    <i class="bi bi-arrow-up-right-square"></i> <span>Online Thema</span>
                </a>
                
                <a href="javascript:void(0)" title="Public Thema" class="list-group-item list-group-item-action text-success">
                    <i class="bi bi-pin-angle-fill"></i> <span>Public Thema</span>
                </a>
                
                <a href="javascript:void(0)" title="Clean Editor" onclick="clearEditor()" class="list-group-item list-group-item-action">
                    <i class="fas fa-eraser"></i> <span>Clean Thema</span>
                </a>
              
                @if ($this->tema)
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-cb custom-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                       Slug : {{ ucfirst($this->currentLanguage) }}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($this->tema->getAttributes() as $column => $value)
                            @if (strpos($column, 'slug_') === 0)
                                @php
                                    $language = substr($column, 5); 
                                    $isActive = $this->currentLanguage === $language;
                                @endphp
                                <li><a class="dropdown-item" href="javascript:void(0)" wire:click="toggleLanguage('{{ $language }}')">
                                        {{ ucfirst($language) }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>                            
                
                @endif
                
                <a href="javascript:void(0)" class="navbar-brand mb-0 h3  p-2 shadow-lg list-group-item "> </a> 
        
                              
            </div>
        </div>       
        <div class="container-fluid">
       
            <button @click="open_sidebar_wire = !open_sidebar_wire" class="btn btn-dark floating-button">
                <i x-show="!open_sidebar_wire" class="fas fa-bars"></i>
                <i x-show="open_sidebar_wire" class="fas fa-times"></i>
            </button>
          
        </div>
    </section>

</div>