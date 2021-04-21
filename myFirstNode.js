//引入模块，(require接口)
var events = require('events');
//创建新的EventEmitter对象
var handEvent = new events.EventEmitter;
//创建事件处理程序
var connectHandler = function connected() {
    console.log('连接成功');
    //触发
    handEvent.emit('data_received');
};
//绑定程序
handEvent.on('connection', connectHandler);
//绑定程序
handEvent.on('data_received', function() {
    console.log('数据接收成功');
});
//触发
handEvent.emit('connection');
console.log('程序执行完毕');

function a() {

}