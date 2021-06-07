wp.blocks.registerBlockType("ljpt-plugins/newsletter-info-block", {
  title: "LJPT - infos newsletter",
  icon: "email-alt",
  catagoty: "common",
  attributes: {
    newsletterInfo: { type: "String" },
  },

  edit: (props) => {
    function updateNewsletterInfo(event) {
      props.setAttributes({ newsletterInfo: event.target.value });
    }

    return React.createElement(
      "div",
      null,
      React.createElement(
        "label",
        {
          style: {
            fontWeight: "600",
            color: "#7438AD",
          },
        },
        "Informations Newsletter"
      ),
      React.createElement("textarea", {
        rows: "4",
        style: {
          resize: "vertical",
          outline: "none",
          width: "100%",
          border: "2px solid #7438AD",
          padding: "5px",
        },
        value: props.attributes.newsletterInfo,
        onChange: updateNewsletterInfo,
      })
    );
  },
  save: (props) => {
    return wp.element.createElement(
      "div",
      {
        style: {
          display: "flex",
          justifyContent: "flex-start",
          alignItems: "center",
        },
      },
      React.createElement(
        "svg",
        {
          xmlns: "http://www.w3.org/2000/svg",
          viewBox: "0 0 512 512",
          style: {
            fill: "#7438AD",
            width: "10%",
            height: "100%",
            marginRight: "5%"
          },
        },
        React.createElement("path", {
          d: "M68 444c-5.9-5.9-15.4-5.9-21.2 0L4.4 486.4c-5.9 5.9-5.9 15.4 0 21.2 5.9 5.9 15.4 5.9 21.2 0l42.4-42.4C73.9 459.3 73.9 449.8 68 444z",
        }),
        React.createElement("path", {
          d: "M152.9 444c-5.9-5.9-15.4-5.9-21.2 0L89.3 486.4c-5.9 5.9-5.9 15.4 0 21.2 5.9 5.9 15.4 5.9 21.2 0l42.4-42.4C158.8 459.3 158.8 449.8 152.9 444z",
        }),
        React.createElement("path", {
          d: "M68 359.1c-5.9-5.9-15.4-5.9-21.2 0L4.4 401.5c-5.9 5.9-5.9 15.4 0 21.2 5.9 5.9 15.4 5.9 21.2 0l42.4-42.4C73.9 374.5 73.9 365 68 359.1z",
        }),
        React.createElement("path", {
          d: "M498.8 140.5L371.5 13.2c-17.6-17.6-46.1-17.5-63.6 0L74.5 246.5c-17.5 17.5-17.7 46 0 63.6l127.3 127.3c17.6 17.6 46.1 17.6 63.6 0l233.4-233.4C516.4 186.6 516.4 158 498.8 140.5zM319.9 43.6l-23.9 178.3c-0.9 6.7-6.2 12-12.9 12.9l-178.3 23.9L319.9 43.6zM226.5 418.9c-1.3-0.7-2.4-1.6-3.5-2.6L96.7 289.9l146.3-19.6L226.5 418.9zM258.6 401.9l15.1-135.7 13.5-1.8c20.1-2.7 36-18.6 38.6-38.6l1.8-13.5 135.7-15.1L258.6 401.9zM331.7 181.7l19.6-146.3 126.3 126.3c1.1 1.1 1.9 2.2 2.6 3.5L331.7 181.7z",
        })
      ),
      React.createElement("p", {style: {
          whiteSpace: 'pre-wrap',
          color: '#7438AD',
          margin: '0 3%',
          minWidth: 'unset'
      }}, props.attributes.newsletterInfo)
    );
  },
});
