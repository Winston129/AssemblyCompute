const mix=require("laravel-mix");

// index
mix.sass("resources/scss/welcome.scss", "public/css")
    .version();


let arr_name_file=["index", "show"]

// Aassembly
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/assembly/${name_file}.scss`, "public/css/assembly")
        .version();
})

// Component
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/component/${name_file}.scss`, "public/css/component")
        .version();
})

// material
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/material/${name_file}.scss`, "public/css/material")
        .version();
})