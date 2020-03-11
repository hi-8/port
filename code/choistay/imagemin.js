const imagemin = require("imagemin-keep-folder");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
const imageminGifsicle = require("imagemin-gifsicle");
const imageminSvgo = require("imagemin-svgo");

imagemin(["./src/images/**/*.{jpg,png,gif,svg}"], {
  plugins: [
    imageminMozjpeg({
      quality: 90
    }),
    imageminPngquant({
      quality: [0.65, 0.9]
    }),
    imageminGifsicle(),
    imageminSvgo()
  ],
  replaceOutputDir: output => {
    return output.replace(/images\//, "..dist/images/");
  }
}).then(() => {
  console.log("Images optimized");
});
