const mix=require("laravel-mix");

// index
mix.sass("resources/scss/welcome.scss", "public/css")
    .version();


let arr_name_file=["index", "show", "create"]

// assembly
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/assembly/${name_file}.scss`, "public/css/assembly")
        .version();
})

// component
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/component/${name_file}.scss`, "public/css/component")
        .version();
})

// material
arr_name_file.map((name_file)=>{
    mix.sass(`resources/scss/material/${name_file}.scss`, "public/css/material")
        .version();
})

mix.sass(`resources/scss/component/find.scss`, "public/css/component")
    .version();
/*---------------------------------------------------------------------*/
// mix.sass("resources/scss/assembly/create.scss", "public/css/assembly")
//     .version();