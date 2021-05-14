wp.blocks.registerBlockType("ljpt-plugins/find-us-block", {
  title: "LJPT - Catalogue",
  icon: "format-aside",
  catagoty: "common",

  edit: (props) => {
    return React.createElement(
      "div",
      {
        style: {
          width: "100%",
          height: "80vh",
        },
      },
      React.createElement("iframe", {
        src: "https://ljpt.ludomax.fr/app/catalogueUsagers.php?action=catalogueList&ludo=ljpt",
        frameborder: "0",
        style: {
          width: "100%",
          height: "100%",
        },
      })
    );
  },

  save: (props) => {
    return React.createElement("iframe", {
      src: "https://ljpt.ludomax.fr/app/catalogueUsagers.php?action=catalogueList&ludo=ljpt",
      frameborder: "0",
      style: {
        width: "100%",
        height: "100%",
        borderRadius: "0",
      },
    });
  },
});
