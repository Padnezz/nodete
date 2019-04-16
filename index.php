<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script src="js/jquery.min.js"></script>
    <script src="js/cytoscape.min.js"></script>
    <style>
    #cy {
        width: 1820px;
        height: 880px;
        display: block;
        margin: auto;
        border: 0.5px solid black;
    }
    </style>
</head>
<body>
<div id="cy"></div>
<script>
var cy = cytoscape({
    container: $("#cy")
});

cy.add([
  { group: 'nodes', data: { id: 'n0' }, position: { x: 100, y: 100 } },
  { group: 'nodes', data: { id: 'n1' }, position: { x: 300, y: 300 } },
  { group: 'edges', data: { id: 'n0-Fa0_1-n1-Fa0_8', source: 'n0', target: 'n1' } }
]);

cy.style("#n0-Fa0_1-n1-Fa0_8 {line-color:green; source-label:In 18.1Mbit/s; target-label:In: 30.4Mbit/s; source-text-offset: 45px; target-text-offset: 45px; text-background-color: black; text-background-opacity: 1; text-background-padding: 1px; color: white;}");

function updateInTraffic(node, interface, traffic){

}

</script>
</body>
</html>