$(window).on('load',() => {
    // console.log(M)
    // M.AutoInit();
    // console.log(new Date())
    if(document.getElementById("bday")) {
        let elem = document.getElementById("bday");
        M.Datepicker.init(elem,{
            format: 'yyyy-mm-dd',
            yearRange: [(new Date()).getFullYear() - 100, (new Date()).getFullYear() ],
            maxDate: new Date(),
        });
        let inst = M.Datepicker.getInstance(elem)
        $("#bday").on("focus", () => {
            inst.open();
        })
    }
    if(document.getElementById("selgender")) {
        console.log("selgender")
        let elem = document.getElementById("selgender");
        M.FormSelect.init(elem);
    }
})

let deletes = (id) => {
  
    let conf = confirm("Delete this use with id "+ id+"?");
    if(conf) {
        console.log(id)
        $("#userdel_"+id).submit();
    }
}