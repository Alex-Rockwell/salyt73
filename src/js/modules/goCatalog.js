function goCatalog (cat) {
    const tmp_id = cat;
    $.ajax({
        type: "POST",
        url: "goCatalog.php",
        data: {id:tmp_id}
    }).done(function( result )
    {

        $("#catalog_list").html(result)

    });
};

export default goCatalog;