wp.blocks.registerBlockType("ljpt-pluginss/contact-form-block", {
  title: "LJPT - Formulaire de contact",
  icon: "businessman",
  catagoty: "common",

  edit: (props) => {
    return React.createElement(
      "div",
      {
        style: {
          width: "100%"
        },
      },
      React.createElement(
        "form",
        {
          style: {
            display: "flex",
            flexDirection: "column",
            alignItems: "space-between",
          },
        },
        React.createElement(
          "div",
          {
            style: {
              display: "flex",
              justifyContent: "space-between",
            },
          },
          React.createElement(
            "div",
            {
              style: {
                width: "45%",
                display: "flex",
                flexDirection: "column",
                position: "relative",
                border: "2px solid #94CB4F",
                borderRadius: "7px",
                padding: "7px",
              },
            },
            React.createElement(
              "label",
              {
                style: {
                  position: "absolute",
                  top: "-15px",
                  left: "20px",
                  padding: "0 5px",
                  backgroundColor: "white",
                  display: "block",
                  fontSize: "14px",
                  color: "#94CB4F",
                },
              },
              "Nom"
            ),
            React.createElement("input", {
              type: "text",
              style: {
                border: "none",
                outline: "none",
              },
            })
          ),
          React.createElement(
            "div",
            {
              style: {
                width: "45%",
                display: "flex",
                flexDirection: "column",
                position: "relative",
                border: "2px solid #94CB4F",
                borderRadius: "7px",
                padding: "7px",
              },
            },
            React.createElement(
              "label",
              {
                style: {
                  position: "absolute",
                  top: "-15px",
                  left: "20px",
                  padding: "0 5px",
                  backgroundColor: "white",
                  display: "block",
                  fontSize: "14px",
                  color: "#94CB4F",
                },
              },
              "Mail"
            ),
            React.createElement("input", {
              type: "text",
              style: {
                border: "none",
                outline: "none",
              },
            })
          )
        ),
        React.createElement(
          "div",
          {
            style: {
              margin: "2% 0",
              position: "relative",
              border: "2px solid #94CB4F",
              borderRadius: "7px",
              padding: "7px",
            },
          },
          React.createElement(
            "label",
            {
              style: {
                position: "absolute",
                top: "-15px",
                left: "20px",
                padding: "0 5px",
                backgroundColor: "white",
                display: "block",
                fontSize: "14px",
                color: "#94CB4F",
              },
            },
            "Message"
          ),
          React.createElement("textarea", {
            rows: "10",
            style: {
              border: "none",
              outline: "none",
              resize: "vertical",
              width: "100%",
            },
          })
        ),
        React.createElement(
          "button",
          {
            style: {
              alignSelf: "flex-end",
              padding: "10px 20px",
              borderRadius: "40px",
              border: "none",
              backgroundColor: "rgba(148, 203, 79, 0.22)",
              color: "#94CB4F",
              fontWeight: "600",
              fontSize: "14px",
              cursor: "pointer",
            },
          },
          "Envoyer mon message"
        )
      )
    );
  },

  save: (props) => {
    return React.createElement(
      "div",
      {
        style: {
          width: "100%",
          display: 'flex',
          justifyContent: 'center',
          margin: '50px 0'
        },
      },
      React.createElement(
        "form",
        {
          style: {
            width: '80%',
            display: "flex",
            flexDirection: "column",
            alignItems: "space-between",
          },
        },
        React.createElement(
          "div",
          {
            style: {
              display: "flex",
              justifyContent: "space-between",
            },
          },
          React.createElement(
            "div",
            {
              style: {
                width: "45%",
                display: "flex",
                flexDirection: "column",
                position: "relative",
                border: "2px solid #94CB4F",
                borderRadius: "7px",
                padding: "7px",
              },
            },
            React.createElement(
              "label",
              {
                style: {
                  position: "absolute",
                  top: "-12px",
                  left: "20px",
                  padding: "0 5px",
                  backgroundColor: "white",
                  display: "block",
                  fontSize: "14px",
                  color: "#94CB4F",
                },
              },
              "Nom"
            ),
            React.createElement("input", {
              type: "text",
              style: {
                border: "none",
                outline: "none",
              },
            })
          ),
          React.createElement(
            "div",
            {
              style: {
                width: "45%",
                display: "flex",
                flexDirection: "column",
                position: "relative",
                border: "2px solid #94CB4F",
                borderRadius: "7px",
                padding: "7px",
              },
            },
            React.createElement(
              "label",
              {
                style: {
                  position: "absolute",
                  top: "-12px",
                  left: "20px",
                  padding: "0 5px",
                  backgroundColor: "white",
                  display: "block",
                  fontSize: "14px",
                  color: "#94CB4F",
                },
              },
              "Mail"
            ),
            React.createElement("input", {
              type: "text",
              style: {
                border: "none",
                outline: "none",
              },
            })
          )
        ),
        React.createElement(
          "div",
          {
            style: {
              margin: "2% 0",
              position: "relative",
              border: "2px solid #94CB4F",
              borderRadius: "7px",
              padding: "7px",
            },
          },
          React.createElement(
            "label",
            {
              style: {
                position: "absolute",
                top: "-12px",
                left: "20px",
                padding: "0 5px",
                backgroundColor: "white",
                display: "block",
                fontSize: "14px",
                color: "#94CB4F",
              },
            },
            "Message"
          ),
          React.createElement("textarea", {
            rows: "10",
            style: {
              border: "none",
              outline: "none",
              resize: "vertical",
              width: "100%",
            },
          })
        ),
        React.createElement(
          "button",
          {
            style: {
              alignSelf: "flex-end",
              padding: "10px 20px",
              borderRadius: "40px",
              border: "none",
              backgroundColor: "rgba(148, 203, 79, 0.22)",
              color: "#94CB4F",
              fontWeight: "600",
              fontSize: "14px",
              cursor: "pointer",
            },
          },
          "Envoyer mon message"
        )
      )
    );
  },
});
