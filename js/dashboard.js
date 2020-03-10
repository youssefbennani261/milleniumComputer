
if (window.location.pathname == "/MelliniumComputer/pages/dashboard.php") {
    let tab;
    $.get("../php/dashboard.php", {
        op: 1
    }, (data) => {
        tab = JSON.parse(data);
        console.log(tab);
        $("#nbrart").html(tab.nbrarticle);
        $("#vendu").html(tab.vendu);
        $("#nonvendu").html(tab.nonvendu);
    })
}
// Dropzone.autoDiscover = false;

if (window.location.pathname == "/MelliniumComputer/pages/liste_articles.php") {
    let tab;
    function get_articles(){
        $.get("../php/dashboard.php", {
            op: 2
        }, (data) => {
            tab = JSON.parse(data);
            $("#datatable").DataTable({
                data: tab,
                columns: [{
                        data: 'desi'
                    },
                    {
                        data: null,render:function (data, type, row){
                            if(row.vendue==0){
                             return "non vendu";
                            }
                             if(row.vendue==1){
                                return "vendu";
                            }
                        }
                    },
                    {
                        data: 'prixU'
                    },
                    {
                        data: 'estimation'
                    },
                    {
                        data: 'categorie'
                    },
                    {
                        data: null,
                        render: function (data, type, row, meta) {
                            var details = '';
                            let tab = Object.keys(data.detail[0]);
                            for (let i = 0; i < tab.length; i++) {
                                details = details + tab[i] + " : " + row.detail[0][tab[i]] + "<br/>";
                            }
                            return details;
                        },
                    },{
                        data:null, mRender: function (data, type, row) {
                            return "<button type='button' class='btn btn-primary waves-effect waves-light m-b-5 modifier' id=" + tab.findIndex(x => x.id == row.id) +">Modifier</button>";
                       }
                    },
                       {
                        data:null, mRender: function (data, type, row) {
                            return "<button type='button' class='btn btn-danger waves-effect waves-light m-b-5 sup' id=" + tab.findIndex(x => x.id == row.id) +">Supprimer</button>";                   }
                       
                    }
                    
    
    
    
                ],
                
                paging: false,
                searching: false,
                destroy: true
            })
        })
    }
    get_articles();
    $("#datatable").on("click",".modifier",(e)=>{
        const originalState = $("#mbody").clone();
        let id=e.currentTarget.id;
          
                
    //     let imgs;
    //     $.get("../php/dashboard.php",{op:6,id:tab[id].id},data=>{
    //         imgs=JSON.parse(data);
    //         console.log(imgs);
    //         $("#fileup2").dropzone({
    //             addRemoveLinks: true,
    //             init: function() { 
    //                 myDropzone = this;
    //                 var mockFile = { name: tab[id].src,size:1};
    //                 myDropzone.emit("addedfile", mockFile);
    //                 myDropzone.emit("thumbnail", mockFile,tab[id].src);
    //                 myDropzone.emit("complete", mockFile);
    //                 myDropzone.files.push(mockFile);
    //                 if(imgs.length){
    //                 $.each(imgs, function(key,value) {
    //                     var mockFile = {  name: value.src,size:value.id_image,type: 'image/jpeg', 
    //                     status: Dropzone.ADDED, accepted: true,
    //                     url: value.src};
              
    //                     myDropzone.emit("addedfile", mockFile);
    //                     myDropzone.emit("thumbnail", mockFile,value.src);
    //                     myDropzone.emit("complete", mockFile);
    //                     myDropzone.files.push(mockFile);
              
    //                   });
    //                 }
                
            
    //     }
    // })
    // })
        $("#designation").val(tab[id].desi);
        $("#prix").val(tab[id].prixU);
        $("#Vendu").val(tab[id].vendue);
        $("#estim").val(tab[id].estimation);
        $("#categorie option").filter(function() {
            return  $(this).text() == tab[id].categorie;
          }).prop('selected', true);

          let data = Object.keys(tab[id].detail[0]);
          for(let i=0;i<data.length;i++){
            $("#mbody").append(`<div class="row"><label for="${data[i]}" class="control-label detail">${data[i]}</label>
            <input type="text" class="form-control detail" id="${data[i]}" name=${data[i]} value=${tab[id].detail[0][data[i]]}></div>
            `);
          }
        
        $("#con-close-modal").modal('show');
        $("#con-close-modal").on('hidden.bs.modal', function () {
            $("#mbody").replaceWith(originalState);
        });
        $("#save").click(()=>{
            let details=$(".detail").serializeArray();
            let result = details.reduce(function(map,obj) {
                map[obj.name] = obj.value;
                return map;
            }, {});
            let arr=[result];
        //    details= details.map((item)=>{
        //         let obj = {}
        //         obj[item.name] = item.value
        //         return obj
        //    });
                $.post("../php/dashboard.php",{op:3,des:$("#designation").val(),vendu:$("#Vendu").val(),prix:$("#prix").val(),est:$("#estim").val(),cate:$("#categorie").val(),detail:JSON.stringify(arr),id:tab[id].id},()=>{
                    $('#con-close-modal').modal('toggle'); 
                    get_articles();
                    $.Notification.autoHideNotify('success','bottom right', 'Modification avec succes');

                })
        // let details=$(".detail").serializeArray();
        // let result = details.reduce(function(map,obj) {
        //     map[obj.name] = obj.value;
        //     return map;
        // }, {});
        // let arr=[result];
    //    details= details.map((item)=>{
    //         let obj = {}
    //         obj[item.name] = item.value
    //         return obj
    //    });

            // let profil=$("#fileup2")[0].dropzone.files[0];
            // $("#fileup2")[0].dropzone.files.shift();
            // let form_data= new FormData();
            // form_data.append("profil",profil);
            // $.each($("#fileup2")[0].dropzone.files,function(i, file){
            //     form_data.append("files[]", file);
            // })
            // form_data.append("des",$("#designation").val());
            // form_data.append("prix",$("#prix").val());
            // form_data.append("vendu",$("#Vendu").val());
            // form_data.append("est",$("#estim").val());
            // form_data.append("cate",$("#categorie").val());
            // form_data.append("detail",JSON.stringify(arr));
            // form_data.append("id",tab[id].id);
            // form_data.append("op",3);
            // $.ajax({
            //  url:"../php/dashboard.php",
            //  method:"POST",
            //  data: form_data,
            //  contentType: false,
            //  cache: false,
            //  processData: false,
            //  success:()=>{
            //     $('#con-close-modal').modal('toggle'); 
            //     get_articles();
            //     $.Notification.autoHideNotify('success','bottom right', 'Modification avec succes');

            //  }
            // })

    })
    })

           

    
       
    $("#datatable").on("click",".sup",(e)=>{

        let id=e.currentTarget.id;
        swal({   
            title: "Confirmation",   
            text: "Etes vous sure de supprimer ce article ?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes",   
            closeOnConfirm: false 
        }, function(){
            $.post("../php/dashboard.php",{op:4,id:tab[id].id},()=>{
                
            })
            swal("Suprime!", "L'article suprime avec succes", "success"); 
            get_articles();
        });
    });
    let originalState2;
    $("#ajouter").click(()=>{
        $("#fileup").dropzone({ });
        $("#con-close-modal2").modal('show');
        originalState2=$("#ajoutbody").clone();
        $("#con-close-modal2").on('hidden.bs.modal', function () {
            $("#ajoutbody").replaceWith(originalState2);
        });
    })
    function ajoutdetail(){
        $("#details").append(`<div class="row"><div class="col-md-6"><input type="text" class="form-control key" placeholder="Nom de specification" ></div><div class="col-md-6"><input type="text" class="form-control value" placeholder="Valeur" ></div></div><br>`);
    }
    $("#save2").click(()=>{
        let details=$(".key");
        let values=$(".value");
    let arr=$.map(details,(el,index)=>{
        let obj={};
        obj[el.value]=values[index].value;        
    return obj;
    })
    result=arr.reduce(((r, c) => Object.assign(r, c)), {});
    let arr2=[result];
    let profil=$("#fileup")[0].dropzone.files[0];
    $("#fileup")[0].dropzone.files.shift();
    console.log($("#fileup")[0].dropzone.files);
    let form_data= new FormData();
    form_data.append("profil",profil);
    $.each($("#fileup")[0].dropzone.files,function(i, file){
        form_data.append("files[]", file);
    })
    form_data.append("des",$("#designation2").val());
    form_data.append("prix",$("#prix2").val());
    form_data.append("est",$("#estim2").val());
    form_data.append("cate",$("#categorie2").val());
    form_data.append("detail",JSON.stringify(arr2));
    form_data.append("op",5);
    $.ajax({
     url:"../php/dashboard.php",
     method:"POST",
     data: form_data,
     contentType: false,
     cache: false,
     processData: false,
    success:()=>{$.Notification.autoHideNotify('success','bottom right', 'Ajout avec succes');   $('#con-close-modal2').modal('toggle'); get_articles();
}

    });


    // let data=new FormData();
    // data.append("files",$("#photos").files)
    // $.ajax({
    //     url:"../php/dashboard.php",
    //     type:"POST"
    // })


})}