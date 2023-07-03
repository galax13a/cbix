@section('title', __('Appeditors'))
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-12 my-2" id="view-js-live-pages">
            <div class="card">

                <div class="card-header bg-transparent shadow">

                    <strong>
                        Create Apps
                    </strong>
                </div>

                <div class="card-body">
                    <div class="editorbot">
						<div class="row ">

                        <div class="col-10 text-center">
                            <div class="input-wrapper">
                                <input type="text" id="myInput" class="input-float w-100 rounded-2 punter"
                                    wire:model="name" />
                            </div>
                        </div>

                        <div class="col-2 text-center">
                            <h3>Apps🍒</h3>
                        </div>

                        <div class="col-10 shadow">
                            <div  id="editorjs" class=" rounded-2  p-3"></div>
                        </div>

                        <div class="col">

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button text-bg-dark" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            🧁 Tools Apps
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <button id="btn-new" type="submit" onclick="saveEditorData()"
                                                class="p-1 m-1 shadow rounded-4">
                                                <strong>
                                                    <i class="far fa-save"></i> Saveme
                                                </strong>
                                            </button>


                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" checked class="btn-check" name="btnradio"
                                                    id="btnradio1" autocomplete="off" checked>
                                                <label class="btn btn-outline-primary" for="btnradio1">EN</label>

                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                    autocomplete="off">
                                                <label class="btn btn-outline-primary" for="btnradio2">ES</label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="far fa-keyboard m-1"></i> SEO
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>tools seo for apps </strong>
                                            En el competitivo mundo de las aplicaciones móviles, lograr que tus apps se
                                            destaquen entre
                           
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fas fa-tags m-1"></i> Tags
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>
                                                This is the third item's accordion body.</strong> It is hidden by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element. These

                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fas fa-images m-1"></i> SEO Imagen
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the fourth item's accordion body.</strong> It is hidden by
                                            default, until
                                            the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed  " type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fas fa-signal m-1"></i> Stats
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the fifth item's accordion body.</strong> It is hidden by
                                            default, until the
                                            collapse plugin adds the appropriate classes that we use to style each
                                            element.
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

						</div>

                    </div>
                </div>              

            </div>

			<div class="card-footer d-flex justify-content-end">
				<strong>Apps Webmaster Botchatur</strong>
			</div>

        </div>
    </div>
	<script>
		var editor = new EditorJS({
			holder: 'editorjs',
			autofocus: false,
			placeholder: 'Let`s write an awesome story!',
			readOnly: false,
			tools: {
				code: CodeTool,
	
				paragraph: {
					class: Paragraph,
					inlineToolbar: true
				},
	
				image: {
					class: ImageTool,
					config: {
						endpoints: {
							byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
							byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
						}
					}
				},	
	
				header: {
					class: Header,
					config: {
						placeholder: 'Enter a header',
						levels: [1, 2, 3, 4, 5, 6],
						defaultLevel: 2,
						defaultAlignment: 'left'
					}
				},
				list: {
					class: NestedList,
					inlineToolbar: true,
					config: {
						defaultStyle: 'unordered'
					},
				},
	
				checklist: {
					class: Checklist,
					inlineToolbar: true,
				},
				table: {
					class: Table,
					inlineToolbar: true,
					config: {
						rows: 2,
						cols: 3,
					},
				},
				Marker: {
					class: Marker,
					shortcut: 'CMD+SHIFT+M',
				},
	
				hyperlink: {
					class: Hyperlink,
					config: {
						shortcut: 'CMD+L',
						target: '_blank',
						rel: 'nofollow',
						availableTargets: ['_blank', '_self'],
						availableRels: ['author', 'noreferrer'],
						validate: false,
					}
				},
				tooltip: {
					class: Tooltip,
					config: {
						location: 'left',
						highlightColor: '#FFEFD5',
						underline: true,
						backgroundColor: '#154360',
						textColor: '#FDFEFE',
						holder: 'editorId',
					}
				},
				Color: {
					class: ColorPlugin, // if load from CDN, please try: window.ColorPlugin
					config: {
						colorCollections: ['#EC7878', '#9C27B0', '#673AB7', '#3F51B5', '#0070FF', '#03A9F4',
							'#00BCD4', '#4CAF50', '#8BC34A', '#CDDC39', '#FFF'
						],
						defaultColor: '#FF1300',
						type: 'text',
						customPicker: true // add a button to allow selecting any colour  
					}
				},
				columns: {
					class: editorjsColumns,
					config: {
						tools: {
							header: Header,
							style: EditorJSStyle.StyleInlineTool,
							image: SimpleImage,
							embed: Embed,
							underline: Underline,
							delimiter: Delimiter,
							code: CodeTool,
							list: {
								class: NestedList,
								inlineToolbar: true,
								config: {
									defaultStyle: 'unordered'
								},
							},
							table: {
								class: Table,
								inlineToolbar: true,
								config: {
									rows: 2,
									cols: 3,
								},
							},
	
						},
						EditorJsLibrary: EditorJS //ref EditorJS - This means only one global thing
					}
				},
	
				style: EditorJSStyle.StyleInlineTool,
				//image: SimpleImage,
				embed: Embed,
				underline: Underline,
				delimiter: Delimiter,
	
			},
	
		})
	
		function saveEditorData() {
	  //const editor = new EditorJS();
	
	  editor.save().then((outputData) => {
		console.log('Article data:', outputData);
		// Aquí puedes realizar acciones adicionales con los datos del artículo guardado
	  }).catch((error) => {
		console.log('Saving failed:', error);
	  });
	}
	
	
	</script>
	<style>
		.ce-editorjsColumns_col {
			border: 1px dashed #b7df92;
			border-radius: 5px;
			gap: 10px;
			padding-top: 10px;
		}
	
		.ce-editorjsColumns_col:focus-within {
			box-shadow: 0 6px 18px #e8edfa80;
		}
	
		#editorjs {
			background-color: rgb(247, 247, 247);
		}
	</style>
	