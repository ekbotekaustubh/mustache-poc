<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php include 'templates.html'; ?>
<div class="row">
    <div class="col-3">
        <ul id="groupList"></ul>
    </div>
    <div class="col-9 p-xl-5">
        <input type="button" value="Add Group" onclick="addGroup()">
    </div>
</div>



<script type="text/javascript" src="node_modules/mustache/mustache.min.js"></script>
<script type="text/javascript" src="js/load-template.js"></script>
<script type="text/javascript">
    function addGroup()
    {
        var templateView = {
            flagImageUrl: 'https://www.bastrucks.com/images/flags/nl.png',
            name: 'Pim Verlinden B.V.',
            imageUrl: 'https://www.bastrucks.com/photos/288/Used-Tractorhead-Volvo-FH-500-6X4-2017_143188_1.jpg?04102017',
            truckId: 1234567,
            title: 'DAF XF 510.445',
            subTitle: 'Retarder SSC',
            extraInfo: 'XRT3453767DCF7',
            messageHeadline: 'Bid: new Bid €18.25'
        };
        template.load.group(templateView);
    }
</script>

<style type="text/css">
    ul {
        padding: 15px;
        margin: 15px;
        list-style: none;
    }
    li {
        border-bottom: solid 1px #ccc;
        padding-top: 10px;
    }
    #groupList {
        border: solid 1px #ccc;
        border-radius: 5px;
        height: 600px;
        width: 100%;
        overflow: scroll;
    }
</style>