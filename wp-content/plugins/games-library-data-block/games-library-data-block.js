wp.blocks.registerBlockType("ljpt-plugins/games-library-data-block", {
  title: "LJPT - infos ludothèque",
  icon: "info-outline",
  catagoty: "common",
  attributes: {
    paragraph1: { type: "String" },
    paragraph2: { type: "String" },
    paragraph3: { type: "String" },
  },

  edit: (props) => {
    function updateParagraph1(event) {
      props.setAttributes({ paragraph1: event.target.value });
    }
    function updateParagraph2(event) {
      props.setAttributes({ paragraph2: event.target.value });
    }
    function updateParagraph3(event) {
      props.setAttributes({ paragraph3: event.target.value });
    }

    return React.createElement(
      "div",
      null,
      React.createElement(
        "div",
        {
          style: {
            display: "flex",
            flexDirection: "column",
          },
        },
        React.createElement(
          "label",
          {
            style: {
              color: "#94CB4F",
              fontWeight: "600",
              marginTop: "15px",
            },
          },
          "Adh\xE9sion \xE0 l\u2019association"
        ),
        React.createElement("textarea", {
          rows: "6",
          style: {
            resize: "vertical",
            outline: "none",
            width: "100%",
            border: "2px solid #94CB4F",
            padding: "5px",
          },
          value: props.attributes.paragraph1,
          onChange: updateParagraph1,
        })
      ),
      React.createElement(
        "div",
        {
          style: {
            display: "flex",
            flexDirection: "column",
          },
        },
        React.createElement(
          "label",
          {
            style: {
              color: "#94CB4F",
              fontWeight: "600",
              marginTop: "15px",
            },
          },
          "Pr\xEAt de jeux et jouets"
        ),
        React.createElement("textarea", {
          rows: "6",
          style: {
            resize: "vertical",
            outline: "none",
            width: "100%",
            border: "2px solid #94CB4F",
            padding: "5px",
          },
          value: props.attributes.paragraph2,
          onChange: updateParagraph2,
        })
      ),
      React.createElement(
        "div",
        {
          style: {
            display: "flex",
            flexDirection: "column",
          },
        },
        React.createElement(
          "label",
          {
            style: {
              color: "#94CB4F",
              fontWeight: "600",
              marginTop: "15px",
            },
          },
          "La ludoth\xE8que est ouverte"
        ),
        React.createElement("textarea", {
          rows: "6",
          style: {
            resize: "vertical",
            outline: "none",
            width: "100%",
            border: "2px solid #94CB4F",
            padding: "5px",
          },
          value: props.attributes.paragraph3,
          onChange: updateParagraph3,
        })
      )
    );
  },
  save: (props) => {
    return wp.element.createElement(
      "div",
      null,
      React.createElement(
        "div",
        {style: {
            display: 'flex',
            justifyContent: 'flex-start',
            height: 'auto',
            marginTop: '50px'
        }},
        React.createElement(
          "div",
          {style: {
              width: '115px',
              minHeight: '200px',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
          }},
          React.createElement(
            "svg",
            {
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 58 58",
              style: { fill: "#94CB4F", width: "45px", height: "45px" },
            },
            React.createElement("path", {
              d: "M32 0c-1 0-2 0.1-3 0.2C28 0.1 27 0 26 0c-4.9 0-9.4 1.6-13.3 4.3 0 0 0 0 0 0 -2 1.4-3.8 3.1-5.3 5C7.3 9.3 7.3 9.4 7.2 9.4c-1.5 1.8-2.8 3.9-3.8 6.1 0 0.1-0.1 0.1-0.1 0.2 -0.7 1.6-1.3 3.2-1.8 4.9 0 0.1-0.1 0.2-0.1 0.3C0.9 23.5 0.5 26.2 0.5 29c0 4.4 0.9 8.6 2.4 12.3C2.9 41.4 3 41.4 3 41.4c0.9 2.2 2.1 4.3 3.5 6.1 0 0.1 0.1 0.1 0.1 0.1 1.4 1.9 3 3.5 4.7 4.9 0.1 0.1 0.1 0.1 0.2 0.1C15.6 56.1 20.6 58 26 58c1 0 2-0.1 3-0.2C30 57.9 31 58 32 58c14.1 0 25.5-13 25.5-29S46.1 0 32 0zM49.2 20.2c0.5-0.2 1.1 0.1 1.3 0.6 0.2 0.7 0.4 1.3 0.6 2 0.1 0.5-0.2 1.1-0.7 1.2 -0.1 0-0.2 0-0.2 0 -0.4 0-0.9-0.3-1-0.8 -0.2-0.6-0.3-1.2-0.5-1.8C48.4 21 48.7 20.4 49.2 20.2zM38.7 8.8c0.2-0.5 0.8-0.7 1.3-0.4 0.6 0.3 1.2 0.7 1.8 1 0.5 0.3 0.6 0.9 0.3 1.4 -0.2 0.3-0.5 0.5-0.8 0.5 -0.2 0-0.4-0.1-0.5-0.2 -0.5-0.3-1.1-0.7-1.6-0.9C38.7 9.9 38.5 9.3 38.7 8.8zM32 6.5c0.7 0 1.4 0 2.1 0.1 0.5 0.1 0.9 0.6 0.9 1.1 -0.1 0.5-0.5 0.9-1 0.9 0 0-0.1 0-0.1 0 -0.6-0.1-1.2-0.1-1.8-0.1 -0.6 0-1-0.4-1-1 0-0.6 0.4-1 1-1v1L32 6.5zM26.5 9.5c-0.6 0.2-1.2 0.5-1.7 0.8 -0.1 0.1-0.3 0.1-0.5 0.1 -0.4 0-0.7-0.2-0.9-0.5 -0.3-0.5-0.1-1.1 0.4-1.3 0.6-0.3 1.3-0.6 1.9-0.8 0.5-0.2 1.1 0.1 1.3 0.6C27.3 8.7 27 9.3 26.5 9.5zM21.8 47.1c0.3-0.5 0.9-0.6 1.4-0.3 0.5 0.3 1.1 0.7 1.6 0.9 0.5 0.3 0.7 0.9 0.4 1.3 -0.2 0.3-0.5 0.5-0.9 0.5 -0.2 0-0.3 0-0.5-0.1 -0.6-0.3-1.2-0.7-1.8-1C21.6 48.2 21.5 47.6 21.8 47.1zM32.1 51.5H32c-0.7 0-1.4 0-2.1-0.1 -0.5-0.1-0.9-0.6-0.9-1.1 0.1-0.5 0.5-0.9 1.1-0.9 0.6 0.1 1.2 0.1 1.9 0.1 0.6 0 1 0.4 1 1S32.6 51.5 32.1 51.5zM5.4 42h3.8c0.2 0.4 0.3 0.7 0.5 1.1 0.1 0.1 0.1 0.3 0.2 0.4 0.2 0.4 0.4 0.8 0.6 1.2 0.1 0.1 0.2 0.3 0.2 0.4 0.2 0.3 0.4 0.6 0.5 0.9H7.8C6.9 44.8 6.1 43.4 5.4 42zM5 17h3.8c-0.2 0.4-0.3 0.9-0.5 1.3 0 0.1-0.1 0.2-0.1 0.4C8 19.1 7.9 19.6 7.8 20H3.9C4.2 19 4.5 18 5 17zM8.5 11h3.5c-0.1 0.2-0.2 0.3-0.4 0.5 -0.3 0.4-0.6 0.9-0.9 1.4 -0.1 0.1-0.2 0.3-0.2 0.4 -0.2 0.4-0.4 0.8-0.6 1.2 -0.1 0.1-0.2 0.3-0.2 0.4C9.7 15 9.7 15 9.7 15H5.9C6.7 13.6 7.6 12.2 8.5 11zM13.6 33.9c0.5-0.1 1.1 0.2 1.2 0.7 0.2 0.6 0.3 1.2 0.5 1.8 0.2 0.5-0.1 1.1-0.6 1.3 -0.1 0-0.2 0.1-0.3 0.1 -0.4 0-0.8-0.3-0.9-0.7 -0.2-0.6-0.4-1.3-0.6-2C12.8 34.6 13.1 34.1 13.6 33.9zM12.2 29V29c0-0.7 0-1.4 0.1-2 0-0.6 0.5-1 1.1-0.9 0.6 0 1 0.5 0.9 1.1 0 0.6-0.1 1.3-0.1 1.9 0 0.6-0.4 1-1 1S12.2 29.6 12.2 29zM15.4 21.6c-0.1 0.4-0.5 0.7-0.9 0.7 -0.1 0-0.2 0-0.3-0.1 -0.5-0.2-0.8-0.7-0.6-1.3 0.2-0.7 0.5-1.3 0.7-1.9 0.2-0.5 0.8-0.7 1.3-0.5 0.5 0.2 0.7 0.8 0.5 1.3C15.8 20.4 15.6 21 15.4 21.6zM2.5 29c0-0.7 0-1.3 0.1-2h4c0 0 0 0 0 0C6.5 27.7 6.5 28.3 6.5 29c0 0.3 0 0.7 0 1H2.5C2.5 29.7 2.5 29.3 2.5 29zM6.6 32c0 0.4 0.1 0.8 0.1 1.3 0 0 0 0.1 0 0.1C6.9 33.9 7 34.5 7.1 35H3.1c-0.2-1-0.3-2-0.4-3H6.6zM7.3 22c0 0.1 0 0.2-0.1 0.4 0 0.1-0.1 0.3-0.1 0.4 -0.1 0.6-0.2 1.3-0.3 1.9 0 0 0 0.1 0 0.1C6.8 24.8 6.8 24.9 6.7 25H2.8c0.1-1 0.3-2 0.5-3H7.3zM7.5 37c0 0.1 0.1 0.2 0.1 0.4 0 0 0 0.1 0 0.1 0.2 0.6 0.4 1.2 0.5 1.8 0 0.1 0.1 0.2 0.1 0.4C8.3 39.8 8.4 39.9 8.4 40H4.6c-0.4-1-0.7-2-1-3H7.5zM18.9 44.5c-0.2 0.2-0.4 0.2-0.6 0.2 -0.3 0-0.6-0.1-0.8-0.4 -0.4-0.5-0.8-1.1-1.2-1.7 -0.3-0.5-0.2-1.1 0.3-1.4 0.5-0.3 1.1-0.2 1.4 0.3 0.4 0.5 0.7 1 1.1 1.5C19.4 43.5 19.3 44.1 18.9 44.5zM19 14.9c-0.2 0.2-0.5 0.4-0.8 0.4 -0.2 0-0.4-0.1-0.6-0.2 -0.4-0.3-0.5-1-0.1-1.4 0.4-0.5 0.9-1.1 1.4-1.5 0.4-0.4 1-0.4 1.4 0 0.4 0.4 0.4 1 0 1.4C19.8 14 19.4 14.5 19 14.9zM21.4 2.6c-0.3 0.2-0.6 0.3-1 0.5 -0.2 0.1-0.4 0.2-0.5 0.3C19.6 3.6 19.4 3.8 19.1 4h-1.9c1.5-0.7 3-1.2 4.6-1.6C21.6 2.5 21.5 2.6 21.4 2.6zM13.7 6h2.8c-0.2 0.2-0.5 0.4-0.7 0.7 -0.2 0.2-0.4 0.4-0.6 0.6 -0.2 0.2-0.4 0.4-0.6 0.6 -0.2 0.2-0.4 0.4-0.6 0.6C13.9 8.6 13.7 8.8 13.6 9h-3.3C11.3 7.9 12.5 6.9 13.7 6zM9.3 48h3.4c0.1 0.1 0.2 0.3 0.3 0.4 0.3 0.4 0.6 0.7 0.9 1.1 0.2 0.2 0.4 0.4 0.6 0.6 0.2 0.2 0.4 0.4 0.6 0.6 0.1 0.1 0.2 0.2 0.2 0.2h-3C11.3 50.1 10.3 49.1 9.3 48zM21.8 55.6c-2.3-0.5-4.5-1.4-6.5-2.6h2.4c0.1 0.1 0.3 0.2 0.4 0.3 0.2 0.2 0.4 0.3 0.6 0.5 0.4 0.3 0.8 0.5 1.2 0.8 0.2 0.1 0.4 0.2 0.6 0.3 0.3 0.2 0.6 0.4 1 0.5C21.5 55.4 21.6 55.5 21.8 55.6zM40.2 49.5c-0.6 0.3-1.3 0.6-1.9 0.8 -0.1 0-0.2 0.1-0.4 0.1 -0.4 0-0.8-0.2-0.9-0.6 -0.2-0.5 0.1-1.1 0.6-1.3 0.6-0.2 1.2-0.5 1.7-0.8 0.5-0.3 1.1-0.1 1.3 0.4C40.9 48.7 40.7 49.3 40.2 49.5zM42.5 37.9c-2.3 2.3-5.1 3.4-8.5 3.4 -2.9 0-5.3-0.8-7.3-2.5 -1.9-1.6-3.1-3.7-3.7-6.2h-2.6c-0.6 0-1-0.4-1-1s0.4-1 1-1h2.3c0-0.4-0.1-0.9-0.1-1.4 0-0.5 0-1 0.1-1.5H21.1c-0.6 0-1-0.4-1-1s0.4-1 1-1h2c0.6-2.5 1.8-4.6 3.5-6.2 1.9-1.7 4.2-2.6 6.9-2.6 2.5 0 4.9 0.9 7.1 2.6v-1.3c0-0.6 0.4-1 1-1 0.6 0 1 0.4 1 1v6.2c0 0.6-0.4 1-1 1 -0.6 0-1-0.4-1-1v-2.1c-0.5-0.6-1.1-1.1-1.8-1.6 -1.7-1.2-3.5-1.8-5.5-1.8 -2 0-3.7 0.7-5.2 2 -1.4 1.2-2.4 2.8-2.9 4.8h8.6c0.6 0 1 0.4 1 1s-0.4 1-1 1h-9c0 0.5-0.1 0.9-0.1 1.5 0 0.5 0 1 0.1 1.4h8.4c0.6 0 1 0.4 1 1s-0.4 1-1 1h-8c0.5 2 1.6 3.6 3 4.8 1.6 1.3 3.6 2 5.9 2 2.9 0 5.3-0.9 7.1-2.8 0.2-0.2 0.5-0.3 0.7-0.3 0.2 0 0.4 0 0.6 0.3 0.2 0.2 0.4 0.4 0.4 0.8C42.8 37.4 42.8 37.6 42.5 37.9zM46.6 44.3c-0.4 0.5-0.9 1.1-1.4 1.5 -0.2 0.2-0.5 0.3-0.7 0.3 -0.3 0-0.5-0.1-0.7-0.3 -0.4-0.4-0.4-1 0-1.4 0.4-0.4 0.9-0.9 1.3-1.4 0.3-0.4 1-0.5 1.4-0.1S46.9 43.9 46.6 44.3zM46.9 16.8c-0.3 0-0.6-0.2-0.8-0.4 -0.4-0.5-0.7-1-1.1-1.5 -0.4-0.4-0.3-1.1 0.1-1.4 0.4-0.3 1.1-0.3 1.4 0.1 0.4 0.5 0.9 1.1 1.2 1.7 0.3 0.5 0.2 1.1-0.3 1.4C47.3 16.8 47.1 16.8 46.9 16.8zM50.5 37.1c-0.2 0.7-0.5 1.3-0.7 1.9 -0.2 0.4-0.5 0.6-0.9 0.6 -0.1 0-0.3 0-0.4-0.1 -0.5-0.2-0.7-0.8-0.5-1.3 0.3-0.6 0.5-1.2 0.7-1.8 0.2-0.5 0.7-0.8 1.3-0.6C50.4 36 50.7 36.5 50.5 37.1zM51.8 31c0 0.5-0.5 0.9-1 0.9 0 0-0.1 0-0.1 0 -0.6 0-1-0.5-0.9-1.1 0-0.6 0.1-1.2 0.1-1.8 0-0.6 0.4-1 1-1s1 0.4 1 1V29C51.8 29.7 51.8 30.3 51.8 31z",
            })
          )
        ),
        React.createElement(
          "div",
          null,
          React.createElement(
            "h3",
            {style: {
                paddingTop: '10px',
                margin: '0',
            }},
            "Adh\xE9sion \xE0 l\u2019association"
          ),
          React.createElement("p", {style: {
              margin:'10px 0',
              whiteSpace: 'pre-wrap'
          }}, props.attributes.paragraph1)
        )
      ),
      React.createElement(
        "div",
        {style: {
            display: 'flex',
            justifyContent: 'flex-start',
            height: 'auto',
            marginTop: '100px'
        }},
        React.createElement(
          "div",
          {style: {
              width: '115px',
              minHeight: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
          }},
          React.createElement(
            "svg",
            {
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 373 373",
              style: { fill: "#94CB4F", width: "45px", height: "45px" },
            },
            React.createElement("path", {
              d: "M373 228.4c0-8.3-6.7-15-15-15h-12v-59.1c0-10.6-8.4-18.9-19-18.9h-11.6c-0.1 0-0.2 0-0.3 0 -0.1-0.2-0.1-0.5-0.1-0.7L315 100.1c0-7.4-6.4-13.7-14-13.7h-38.2c-7.5 0-13.9 6.3-13.9 13.7v33.5l0 0.5c0 0.2 0 0.8-0.1 1.2h-31.6c-5 0-9.3-4.4-9.3-9.6V60.4c0-10.5-8.6-19-19.2-19H46.7C35.9 41.4 27 49.9 27 60.4v153H15c-8.3 0-15 6.7-15 15s6.7 15 15 15h5c-0.5 3.4-0.7 6.9-0.7 10.4 0 42.9 34.9 77.8 77.8 77.8 27.1 0 51.1-14 65-35.1 9.3 17.9 28 30.1 49.5 30.1 18.7 0 35.2-9.2 45.4-23.4 10.1 14.1 26.7 23.4 45.4 23.4 30.8 0 55.8-25 55.8-55.8 0-10-2.6-19.3-7.2-27.4H358C366.3 243.4 373 236.7 373 228.4zM78 153V89.8c0-3 2.4-5.4 5.4-5.4h65.2c3 0 5.4 2.4 5.4 5.4v63.2c0 3-2.4 5.4-5.4 5.4H83.4C80.4 158.4 78 156 78 153zM97.1 301.6c-26.4 0-47.8-21.4-47.8-47.8s21.4-47.8 47.8-47.8 47.8 21.4 47.8 47.8S123.4 301.6 97.1 301.6zM211.6 296.6c-14.2 0-25.8-11.6-25.8-25.8s11.6-25.8 25.8-25.8c14.2 0 25.8 11.6 25.8 25.8S225.8 296.6 211.6 296.6zM302.3 296.6c-14.2 0-25.8-11.6-25.8-25.8s11.6-25.8 25.8-25.8 25.8 11.6 25.8 25.8S316.5 296.6 302.3 296.6z",
            })
          )
        ),
        React.createElement(
          "div",
          null,
          React.createElement("h3", {style: {
              paddingTop: '10px',
              margin: '0',
          }}, "Pr\xEAt de jeux et jouets"),
          React.createElement("p", {style: {
              margin:'10px 0',
              whiteSpace: 'pre-wrap'
          }}, props.attributes.paragraph2)
        )
      ),
      React.createElement(
        "div",
        {style: {
            display: 'flex',
            justifyContent: 'flex-start',
            height: 'auto',
            marginTop: '100px'
        }},
        React.createElement(
          "div",
          {style: {
              width: '115px',
              minHeight: '100%',
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'center'
          }},
          React.createElement(
            "svg",
            {
              xmlns: "http://www.w3.org/2000/svg",
              viewBox: "0 0 512 512",
              style: { fill: "#94CB4F", width: "45px", height: "45px" },
            },
            React.createElement("path", {
              d: "M437 75C388.7 26.6 324.4 0 256 0S123.3 26.6 75 75C26.6 123.3 0 187.6 0 256s26.6 132.7 75 181C123.3 485.4 187.6 512 256 512s132.7-26.6 181-75C485.4 388.7 512 324.4 512 256S485.4 123.3 437 75zM256 461.8c-113.5 0-205.8-92.3-205.8-205.8 0-0.2 0-0.4 0-0.6 0 0 0-0.1 0-0.1 0-0.1 0-0.2 0-0.2 0.5-112.1 91.1-203.3 202.9-204.8 0.2 0 0.5 0 0.7 0 0.1 0 0.3 0 0.4 0 0.6 0 1.1 0 1.7 0 113.5 0 205.8 92.3 205.8 205.8S369.5 461.8 256 461.8z",
            }),
            React.createElement("path", {
              d: "M412.3 268.4c-8.4 0-15.1-6.8-15.1-15.1 0-8.4 6.8-15.1 15.1-15.1h18.3c-8.6-84.1-76.8-150.8-161.5-157v15.9c0 8.4-6.8 15.1-15.1 15.1 -8.4 0-15.1-6.8-15.1-15.1V81.4c-83.5 8.2-150 75.1-157.5 158.8h16.4c8.4 0 15.1 6.8 15.1 15.1 0 8.4-6.8 15.1-15.1 15.1H81.1c7 85 74.8 153 159.7 160.3v-19.2c0-8.4 6.8-15.1 15.1-15.1 8.4 0 15.1 6.8 15.1 15.1v19.2c85.6-7.4 153.9-76.5 159.9-162.4H412.3zM317.3 216.1l-50.6 50.6c-2.8 2.8-6.7 4.4-10.7 4.4 -4 0-7.9-1.6-10.7-4.4l-88.1-88.1c-5.9-5.9-5.9-15.5 0-21.4 5.9-5.9 15.5-5.9 21.4 0l77.4 77.4L295.9 194.7c5.9-5.9 15.5-5.9 21.4 0C323.2 200.6 323.2 210.2 317.3 216.1z",
            })
          )
        ),
        React.createElement(
          "div",
          null,
          React.createElement("h3", {style: {
              paddingTop: '10px',
              margin: '0',
          }}, "La ludoth\xE8que est ouverte"),
          React.createElement("p", {style: {
              margin:'10px 0',
              whiteSpace: 'pre-wrap'
          }}, props.attributes.paragraph3)
        )
      )
    );
  },
});