wp.blocks.registerBlockType("ljpt-plugins/letter-and-phone-block", {
  title: "LJPT - Courrier et téléphone",
  icon: "phone",
  catagoty: "common",
  attributes: {
    postalAddress: { type: "String" },
    phoneNumber: { type: "String" },
    color: { type: "String" },
  },
  edit: (props) => {
    function updatePostalAdress(event) {
      props.setAttributes({ postalAddress: event.target.value });
    }
    function updatePhoneNumber(event) {
      props.setAttributes({ phoneNumber: event.target.value });
    }
    function updateColor(value) {
      props.setAttributes({ color: value.hex });
    }

    return React.createElement(
      "div",
      {
        style: {
          width: "100%",
          display: "flex",
          justifyContent: "space-between",
        },
      },
      React.createElement(
        "div",
        {
          style: { display: "flex", flexDirection: "column", width: "55%" },
        },
        React.createElement(
          "div",
          {
            style: { width: "100%" },
          },
          React.createElement(
            "p",
            {
              style: {
                fontWeight: "600",
                marginBottom: "0",
                color: props.attributes.color,
              },
            },
            "Courrier :"
          ),
          React.createElement("textarea", {
            rows: "3",
            placeholder: "Adresse postale",
            style: {
              resize: "vertical",
              outline: "none",
              width: "100%",
              border: "2px solid " + props.attributes.color,
              padding: "5px",
            },
            value: props.attributes.postalAddress,
            onChange: updatePostalAdress,
          })
        ),
        React.createElement(
          "div",
          {
            style: { width: "100%" },
          },
          React.createElement(
            "p",
            {
              style: {
                fontWeight: "600",
                marginBottom: "0",
                color: props.attributes.color,
              },
            },
            "T\xE9l\xE9phone :"
          ),
          React.createElement("textarea", {
            rows: "2",
            placeholder: "Num\xE9ro de T\xE9l\xE9phone",
            style: {
              resize: "vertical",
              outline: "none",
              width: "100%",
              border: "2px solid " + props.attributes.color,
              padding: "5px",
            },
            value: props.attributes.phoneNumber,
            onChange: updatePhoneNumber,
          })
        )
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
    return wp.element.createElement(
      "div",
      {
        class: "letter-and-phone-block-container",
      },
      React.createElement(
        "div",
        {
          class: "letter-block-container block",
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
              width: "35",
              height: "35",
              viewBox: "0 0 957.6 957.6",
              style: { fill: props.attributes.color },
            },
            React.createElement("path", {
              d:
                "M817.9 108.4h-28v687.9c0 45.7-37.2 82.9-82.9 82.9H423.3 197.7v25.5c0 29.2 23.7 52.9 52.9 52.9h283.6H817.8c29.2 0 52.9-23.7 52.9-52.9V161.3C870.7 132.1 847.1 108.4 817.9 108.4z",
            }),
            React.createElement("path", {
              d:
                "M423.3 849.2h283.6c29.2 0 52.9-23.7 52.9-52.9V108.4 52.9c0-29.2-23.7-52.9-52.9-52.9H423.3 329v17.5c0.2 1.8 0.3 3.7 0.3 5.6v115.3V168c0 41.1-33.4 74.5-74.5 74.5h-29.6H109.9c-1.5 0-3.1-0.1-4.6-0.2H86.9v554c0 29.2 23.7 52.9 52.9 52.9h58H423.3L423.3 849.2zM434 669.4H249.1c-13.8 0-25-11.2-25-25 0-13.8 11.2-25 25-25h185c13.8 0 25 11.2 25 25C459.1 658.2 447.8 669.4 434 669.4zM619 541.8H249.1c-13.8 0-25-11.2-25-25 0-13.8 11.2-25 25-25H619c13.8 0 25 11.2 25 25C644 530.6 632.8 541.8 619 541.8zM249.1 356.3H619c13.8 0 25 11.2 25 25 0 13.8-11.2 25-25 25H249.1c-13.8 0-25-11.2-25-25C224.1 367.5 235.3 356.3 249.1 356.3z",
            }),
            React.createElement("path", {
              d:
                "M109.9 212.5h144.9c0.1 0 0.3 0 0.4 0 24.2-0.2 43.8-19.8 44-44 0-0.1 0-0.3 0-0.4v-145c0-13.4-11-22.3-22.4-22.3 -5.5 0-11 2-15.6 6.6L94.1 174.5C80.1 188.5 90 212.5 109.9 212.5z",
            })
          ),
          React.createElement(
            "p",
            { style: { color: props.attributes.color } },
            "Courrier"
          )
        ),
        React.createElement(
          "div",
          {
            class: "block-content",
          },
          React.createElement("p", null, props.attributes.postalAddress)
        )
      ),
      React.createElement(
        "div",
        {
          class: "phone-block-container block",
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
              width: "35",
              height: "35",
              viewBox: "0 0 513.6 513.6",
              style: { fill: props.attributes.color },
            },
            React.createElement("path", {
              d:
                "M499.7 377l-71.7-71.7c-25.6-25.6-69.1-15.4-79.4 17.9 -7.7 23-33.3 35.8-56.3 30.7 -51.2-12.8-120.3-79.4-133.1-133.1 -7.7-23 7.7-48.6 30.7-56.3 33.3-10.2 43.5-53.8 17.9-79.4l-71.7-71.7c-20.5-17.9-51.2-17.9-69.1 0l-48.6 48.6c-48.6 51.2 5.1 186.9 125.4 307.2 120.3 120.3 256 176.6 307.2 125.4l48.6-48.6C517.6 425.6 517.6 394.9 499.7 377z",
            })
          ),
          React.createElement(
            "p",
            { style: { color: props.attributes.color } },
            "T\xE9l\xE9phone"
          )
        ),
        React.createElement(
          "div",
          {
            class: "block-content",
          },
          React.createElement("p", null, props.attributes.phoneNumber)
        )
      )
    );
  },
});
