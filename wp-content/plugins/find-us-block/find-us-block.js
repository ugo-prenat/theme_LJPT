wp.blocks.registerBlockType("ljpt-plugins/find-us-block", {
  title: "LJPT - Nous trouver",
  icon: "location",
  catagoty: "common",
  attributes: {
    locationInformation: { type: "String" },
    color: { type: "String" },
  },
  edit: (props) => {
    function updateLocationInformation(event) {
      props.setAttributes({ locationInformation: event.target.value });
    }
    function updateColor(value) {
      props.setAttributes({ color: value.hex });
    }

    return React.createElement(
      "div",
      {
        style: {
          display: "flex",
          justifyContent: "space-between",
          margin: "10px 0",
        },
      },
      React.createElement(
        "div",
        {
          style: {
            display: "flex",
            flexDirection: "column",
            width: "55%",
          },
        },
        React.createElement(
          "p",
          {
            style: {
              fontWeight: "600",
              margin: "5px 0",
              color: props.attributes.color,
            },
          },
          "Information de localisation :"
        ),
        React.createElement("textarea", {
          value: props.attributes.locationInformation,
          onChange: updateLocationInformation,
          style: {
            resize: "vertical",
            outline: "none",
            width: "100%",
            height: "-webkit-fill-available",
            border: "2px solid " + props.attributes.color,
            padding: "5px",
          },
        })
      ),
      React.createElement(
        "div",
        {
          style: {
            width: "40%",
            height: "100%",
          },
        },
        React.createElement(wp.components.ColorPicker, {
          color: props.attributes.color,
          onChangeComplete: updateColor,
        })
      )
    );
  },

  save: (props) => {
    return React.createElement(
      "div",
      {
        class: "find-us-block-container",
      },
      React.createElement(
        "div",
        {
          class: "block-title",
        },
        React.createElement(
          "svg",
          {
            xmlns: "http://www.w3.org/2000/svg",
            id: "Layer_1",
            "enable-background": "new 0 0 512 512",
            height: "35",
            viewBox: "0 0 512 512",
            width: "35",
            style: {
              fill: props.attributes.color,
            },
          },
          React.createElement(
            "g",
            null,
            React.createElement("path", {
              d:
                "m407.579 87.677c-31.073-53.624-86.265-86.385-147.64-87.637-2.62-.054-5.257-.054-7.878 0-61.374 1.252-116.566 34.013-147.64 87.637-31.762 54.812-32.631 120.652-2.325 176.123l126.963 232.387c.057.103.114.206.173.308 5.586 9.709 15.593 15.505 26.77 15.505 11.176 0 21.183-5.797 26.768-15.505.059-.102.116-.205.173-.308l126.963-232.387c30.304-55.471 29.435-121.311-2.327-176.123zm-151.579 144.323c-39.701 0-72-32.299-72-72s32.299-72 72-72 72 32.299 72 72-32.298 72-72 72z",
            })
          )
        ),
        React.createElement("p", {style: {color: props.attributes.color}}, "Nous trouver")
      ),
      React.createElement(
        "div",
        {
          class: "block-content",
        },
        React.createElement("p", null, props.attributes.locationInformation),
        React.createElement("iframe", {
          src:
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2615.903756569193!2d2.083856566682391!3d49.03143747741122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f536d56b44ad%3A0x2f59a1c8d7790f99!2sJeu%20Pour%20Tous!5e0!3m2!1sfr!2sfr!4v1620113033827!5m2!1sfr!2sfr",
          allowfullscreen: "",
          loading: "lazy",
        })
      )
    );
  },
});
