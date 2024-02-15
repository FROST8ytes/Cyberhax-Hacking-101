<div>
    <script src="d3.v4.min.js"></script>
    <script src="lodash.min.js"></script>
    <script src="dTree.min.js"></script>
    <style>
        #graph {
            font: 10px sans-serif;
        }

        .linage {
            fill: none;
            stroke: #000;
        }

        .marriage {
            fill: none;
            stroke: black;
        }

        .man {
            background-color: lightblue;
            border-style: solid;
            border-width: 1px;
            box-sizing: border-box;
        }

        .woman {
            background-color: pink;
            border-style: solid;
            border-width: 1px;
            box-sizing: border-box;
        }

        .emphasis {
            font-style: italic;
        }

        p {
            padding: 0;
            margin: 0;
        }

        svg {
            border-style: solid;
            border-width: 1px;
        }
    </style>

    <main>
        <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
            <h1>Family Tree Viewer</h1>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Family Name" aria-label="Search" disabled>
            </form>
        </div>
        <div id="graph"></div>

    </main>

    <script>
        treeData = [{
            "name": "Pak Dollah",
            "class": "man",
            "textClass": "emphasis",
            "marriages": [{
                "spouse": {
                    "name": "Rokiah",
                    "class": "woman",
                    "extra": {
                        "nickname": "Enon"
                    }
                },
                "children": [
                    {
                        "name": "Mustafa Kamal",
                        "class": "man",
                        "marriages": [{
                            "spouse": {
                                "name": "Ramlah",
                                "class": "woman",
                            },
                            "children": [
                                {
                                    "name": "Sarif",
                                    "class": "man",
                                },
                                {
                                    "name": "Kalsom",
                                    "class": "woman",
                                },
                                {
                                    "name": "Abdul Rahman",
                                    "class": "man",
                                },
                            ],
                        }],
                    },
                    {
                        "name": "Kak Limah",
                        "class": "woman"
                    },
                    {
                    "name": "Siti Hajah",
                    "class": "woman",
                    "marriages": [{
                        "spouse": {
                            "name": "Pak Mus",
                            "class": "man"
                        },
                        "children": [{
                            "name": "Ahmad Anas",
                            "class": "man",
                            "marriages": [{
                                "spouse": {
                                    "name": "Nur Syahirah",
                                    "class": "woman"
                                },
                                "children": [
                                    {
                                        "name": "Jeffrey",
                                        "class": "man"
                                    },
                                    {
                                        "name": "Josaline",
                                        "class": "woman"
                                    }
                                ]
                            }]
                        }, {
                            "name": "Ahmad Amirul",
                            "class": "man",
                            "marriages": [{
                                "spouse": {
                                    "name": "Rania",
                                    "class": "woman"
                                },
                                "children": [
                                    {
                                        "name": "Ammarina",
                                        "class": "woman"
                                    },
                                    {
                                        "name": "Rihanna",
                                        "class": "woman"
                                    }
                                ]
                            }]
                        }, {
                            "name": "Nur Medina",
                            "class": "woman",
                        }]
                    }]
                }]
            }]
        }];

        dTree.init(treeData, {
            target: "#graph",
            debug: true,
            height: 800,
            width: 1200,
            callbacks: {
                nodeClick: function (name, extra) {
                    console.log(name);
                },
                textRenderer: function (name, extra, textClass) {
                    // THis callback is optinal but can be used to customize
                    // how the text is rendered without having to rewrite the entire node
                    // from screatch.
                    if (extra && extra.nickname)
                        name = name + " (" + extra.nickname + ")";
                    return "<p align='center' class='" + textClass + "'>" + name + "</p>";
                },
                nodeRenderer: function (name, x, y, height, width, extra, id, nodeClass, textClass, textRenderer) {
                    // This callback is optional but can be used to customize the
                    // node element using HTML.
                    let node = '';
                    node += '<div ';
                    node += 'style="height:100%;width:100%;" ';
                    node += 'class="' + nodeClass + '" ';
                    node += 'id="node' + id + '">\n';
                    node += textRenderer(name, extra, textClass);
                    node += '</div>';
                    return node;
                }
            }
        });
    </script>
</div>