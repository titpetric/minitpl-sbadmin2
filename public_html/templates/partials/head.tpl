    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- head -->

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{site.title}</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/vendor/onokumus/metismenu/dist/metisMenu.min.css" rel="stylesheet">

    <link href="/vendor/drmonty/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/vendor/drmonty/datatables-responsive/css/dataTables.responsive.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/main.less" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/vendor/fortawesome/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script>
	var callbacks = [];
	var $onload = function(cb) {
		if (window.jQuery) {
			return jQuery(cb);
		}
		callbacks.push(cb);
		return $onload;
	};
	</script>