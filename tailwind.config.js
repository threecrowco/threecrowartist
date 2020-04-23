const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    theme: {
        extend: {}
    },
    variants: {},
    // prettier-ignore
    plugins: [
        require("@tailwindcss/custom-forms"),
        require("@tailwindcss/ui")
    ]
};
