// config-bio-cb.js
var isReadOnly = false;
const editor = new EditorJS({
    holder: 'editor-biochaturbate',
    autofocus: isReadOnly,
    placeholder: `--> 👉 ᴄʟɪᴄᴋ Hᴇʀᴇ <-- 👌🏾  Start creating an attractive bio for your fans 🐱   🅲🆁🅴🅰🆃🅴🍓🅱🅸🅾 🅑🅨 PʟᴀʏꜱCᴀᴍ.ᴄᴏᴍ 🦄`,
    tools: {
        header: {
            class: Header,
            config: {
                levels: [1, 2, 3],
                defaultLevel: 1,
            },
        },
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
        },
        CardsPlayscam: {
            class: CardsPlayscam,
        },
        CopysPlaycam: {
            class: CopysPlaycam,
            inlineToolbar: ['bold', 'italic'],
        },
        list: {
            class: NestedList,
            inlineToolbar: true,
            config: {
                defaultStyle: 'unordered'
            },
        },
        br: {
            class: BRPlaycams,
        },
        CodexPlaycam: {
            class: CodexPlaycam,
        },
        titlePlaycams: {
            class: TitlePlaycam,
            inlineToolbar: true,
        },
        RulesPlaycam: {
            class: RulesPlaycam,
            inlineToolbar: ['bold', 'italic'],
        },
        offerspecial: {
            class: Offerspecial,
            inlineToolbar: true,
        },
    },
});

// Exporta el objeto editor
export default editor;
