var isReadOnly = false;
var editor;

function toggleReadOnly() {
    isReadOnly = !isReadOnly;
    editor.readOnly.toggle();    
}

editor = new EditorJS({
    holder: 'editorjs',
    autofocus: false,
    placeholder: '🦄 Let`s write an awesome story!',
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
                EditorJsLibrary: EditorJS
            }
        },
        style: EditorJSStyle.StyleInlineTool,
        embed: Embed,
        underline: Underline,
        delimiter: Delimiter,
    }
});
