<?php
use Swoorift\swoole\factory\TFramedTransportFactory;
use Swoorift\swoole\server\SwooleServer;
use Swoorift\swoole\server\SwooleServerTransport;
use handler\SumServiceImpl;
use tests\services\SumService\SumServiceProcessor;
use Swoole\Server;

use Thrift\Exception\TTransportException;
use Thrift\Factory\TBinaryProtocolFactory;

require __DIR__ . '/vendor/autoload.php';

$processor = new SumServiceProcessor(new SumServiceImpl());

$serverTransport = new SwooleServerTransport('localhost');
$transportFactory = new TFramedTransportFactory();
$protocolFactory = new TBinaryProtocolFactory();
$server = new SwooleServer(
    $processor,
    $serverTransport,
    $transportFactory,
    $transportFactory,
    $protocolFactory,
    $protocolFactory
);

try {
    $server->on('start', function (Server $server) {
        printf("Server::serve on %s:%d\n", $server->host, $server->port);
    });
    $server->serve();
} catch (TTransportException $e) {
    printf("Server::serve error: {$e->getMessage()}\n");
}
