wp.blocks.registerBlockType("ljpt-plugin/letter-and-phone-block", {
    title: "LJPT - Image d'en-tête",
    icon: "cover-image",
    catagoty: "common",
    attributes: {
      image: { type: "String" },
    },
    edit: (props) => {
        return React.createElement(wp.components.formFileUpload, {
            accept: 'image/*',
        })
    },
    save: (props) => {
        return null
    }
});