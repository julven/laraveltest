            
window.addEventListener('load', () => {
    var elems = document.getElementById('bday');
    var instances = M.Datepicker.init(elems, {
        format: "mm-dd-yyyy",
        onSelect: () => document.getElementById('bday').value = instances.toString(),
        yearRange: [1930, (new Date()).getFullYear()]
    });
})