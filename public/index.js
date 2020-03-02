            
window.addEventListener('load', () => {
    var elems = document.getElementById('bday');
    var select = document.getElementById('selgender');
    var sidebar = document.getElementById('mobile-demo');
   
    var instances = M.Datepicker.init(elems, {
        format: "mm-dd-yyyy",
        onSelect: () => document.getElementById('bday').value = instances.toString(),
        yearRange: [1930, (new Date()).getFullYear()]
    });
    var selgender = M.FormSelect.init(select, null);
    var sidenav = M.Sidenav.init(sidebar, null);

    if(document.getElementById('imgchange') != null) {
        document.getElementById('imgchange').addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('image').click();
            // console.log(e)
        }); 
    }
    
    if(document.getElementById('image') != null) {
        document.getElementById('image').addEventListener('change', (e) => {
            // console.log(e.target.files[0])
            var reader = new FileReader();
            reader.onload = function() {
               document.getElementById('imgprev').src = reader.result;
            //    console.log(reader.result)
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    }
    
})

function deletes(id) {
    console.log(id);
    let conf = confirm("delete this user?");

    if(conf) document.getElementById('userdel_'+id).submit();
}

