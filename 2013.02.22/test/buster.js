var config = module.exports;

config["Graphite tests - browser"] = {
    environment: "browser",
    rootPath: "../",
    sources: [
        "javascript/*.js"
    ],
    tests: [
        "test/*.test.js"
    ],
    libs: [
        "javascript/lib/*.js"
    ],
    extensions: [
        require("buster-lint")
    ],
    "buster-lint": {
        excludes: [
            "d3",
            "jquery",
            "underscore"
        ],
        linterOptions: {
            maxlen: 200,
            nomen: true
        }
    }
};
