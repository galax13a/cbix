var isReadOnly = false;
var editor;

const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

function toggleReadOnly() {
    isReadOnly = !isReadOnly;
    editor.readOnly.toggle();
}

window.addEventListener('load', function () {

    var appLink = document.getElementById('app-link');
    var imageUploadUrl = appLink.dataset.image_upload;
    urlParams = new URLSearchParams(window.location.search);
    slug = urlParams.get('slug');
    imageUploadUrl = imageUploadUrl + '?slug=' + slug;
    //console.log(imageUploadUrl);

editor = new EditorJS({
    holder: 'editorjs',
    autofocus: false,
    placeholder: '🦄 Let`s write an awesome story!  Click Write📝',
    readOnly: false,
    tools: {

        header: {
            class: Header,
            shortcut: 'CMD+SHIFT+H',
            config: {
                placeholder: 'Enter a header',
                levels: [1, 2, 3, 4, 5, 6],
                defaultLevel: 2,
                defaultAlignment: 'left'
            }
        },
        iafree:window.IAFree,
        linkpage: window.GetPage,
        getchatur:window.GetChatur,        
        btnsimple:window.BtnSimple,
        iframesimple:window.IframeUrlSimple,
                
        paragraph: {
            class: Paragraph,
            inlineToolbar: true
        },
        quote: {
            class: Quote,
            inlineToolbar: true,
            shortcut: 'CMD+SHIFT+O',
            config: {
                quotePlaceholder: 'Enter a quote',
                captionPlaceholder: 'Quote\'s author',
            },
        },

        image: {
            class: ImageTool,
            shortcut: 'CMD+SHIFT+P',
            config: {
                endpoints: {
                    byFile: `${imageUploadUrl}`,
                    byUrl: `${imageUploadUrl}`,
                },
                additionalRequestHeaders: {
                    'X-CSRF-TOKEN': csrfToken,
                },
            }
        },

        carousel: {
            class: Carousel,
            config: {
                endpoints: {
                    byFile: `${imageUploadUrl}`,
                },
                additionalRequestHeaders: {
                    'X-CSRF-TOKEN': csrfToken,
                },

            }
        },

        list: {
            class: NestedList,
            inlineToolbar: true,
            config: {
                defaultStyle: 'unordered'
            },
        },
        delimiter: Delimiter,

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
            class: ColorPlugin,
            config: {
                colorCollections: ['#EC7878', '#9C27B0', '#673AB7', '#3F51B5', '#0070FF', '#03A9F4',
                    '#00BCD4', '#4CAF50', '#8BC34A', '#CDDC39', '#FFF'
                ],
                defaultColor: '#FF1300',
                type: 'text',
                customPicker: true
            }
        }, 

        columns: {
            class: editorjsColumns,
            config: {
                tools: {
                    
                    header: Header,
                    btnsimple:window.BtnSimple,
                    getchatur:window.GetChatur,    
                    linkpage: window.GetPage,
                    style: EditorJSStyle.StyleInlineTool,
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
                    Marker: {
                        class: Marker,
                        shortcut: 'CMD+SHIFT+M',
                    },
                    table: {
                        class: Table,
                        inlineToolbar: true,
                        config: {
                            rows: 2,
                            cols: 3,
                        },
                    },
                    image: {
                        class: ImageTool,
                        config: {
                            endpoints: {
                                byFile: `${imageUploadUrl}`,
                                byUrl: `${imageUploadUrl}`,
                            },
                            additionalRequestHeaders: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        }
                    },
                    carousel: {
                        class: Carousel,
                        config: {
                            endpoints: {
                                byFile: `${imageUploadUrl}`,
                            },
                            additionalRequestHeaders: {
                                'X-CSRF-TOKEN': csrfToken,
                            },

                        }
                    },
                },
                EditorJsLibrary: EditorJS
            }
        },
        style: EditorJSStyle.StyleInlineTool,
        embed: Embed,
        underline: Underline,
        raw: RawTool,
        code: CodeTool,

    },

    

});
});
