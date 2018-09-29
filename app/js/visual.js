class Visual {

    component($component){
        this.component = document.querySelector($component);
        return this;
    }

    setJSON(data){

        this.data = data;
        
        return this;

    }

    table(){

        var $c = this.component;
        var data = this.data;

        data = (typeof data !=='undefined')?(data):{};
        data = JSON.parse(data);

        var tableheader = $c.createTHead().insertRow(0);

        Object.keys(data[0]).map(function(header,key){

            tableheader.insertCell(key).innerHTML = header;

        });
        

        function tablemap(obj,key){
           
            var tablerow = $c.insertRow(key);

            Object.values(obj).forEach(function(value,key){

                tablerow.insertCell(key).innerHTML = value;

            });

        }

        data.map(tablemap);

    }

}

var $v = new Visual();