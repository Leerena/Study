/**
*获取所有连接在本地pc的串口
*/
/**
function getPortList(request,sender,sendResponse) {
	chromwe.serial.getDevices(
	    function(ports) {
			if(chromwe.runtime.lastError) {
			    sendResponse({
				    result:"error,
					error:chrom.runtime.lastError.message
			    });
			} else {
				sendResponse({
					result:"ok",
					ports: ports
				});
			}
		}
	);	
}
function openPort
*/
/**
*连接到指定的串行端口
*/
/**
chrome.serial.connect(path, options, function(connectionInfo){
    //do something with connectionInfo
});
*/
    var onGetDevices = function(ports) {//遍历获取串口名称，一般只有一个串口判断if(ports.length==1){port=ports[0].path}即可
        for (var i = 0; i < ports.length; i++) {
            console.log(ports[i].path);
        }
    }
    chrome.serial.getDevices(onGetDevices);//获取串口设备名,并将串口设备信息当参数传入指定的onGetDevices函数
 
    function convertArrayBufferToString(buf) {//将串口接收到的buffer数据转化成字符串
        var bufView = new Uint8Array(buf);
        var encodedString = String.fromCharCode.apply(null, bufView);
		return encodedString;
    }
 
    var onReceiveCallback = function(info) {//串口数据接收函数
        console.log('received', convertArrayBufferToString(info.data));
    };
 
     var convertStringToArrayBuffer = function(str) {//将字符串转化成buffer用于串口数据发送
        var buf = new ArrayBuffer(str.length);
        var bufView = new Uint8Array(buf);
        for (var i = 0; i < str.length; i++) {
            bufView[i] = str.charCodeAt(i);
        }
        return buf;
    };
 
    var onConnect = function(connectionInfo) {
        //console.log(chrome.runtime.lastError, connectionInfo);//输出连接信息
        chrome.serial.onReceive.addListener(onReceiveCallback);//指定串口数据接收函数
        var connectionId = connectionInfo.connectionId;//输出串口连接id，用于区别多串口
        var buffer = new ArrayBuffer(1);
        var dataView = new DataView(buffer);
        dataView.setInt8(0, 0xaa);//构造buffer数据
 
        chrome.serial.send(connectionId, buffer, function() {//指定串口连接id，直接发送buffer数据，也可将字符串转化成buffer再发送convertStringToArrayBuffer("hello")
            chrome.serial.update(connectionId, {//改变波特率等参数
                bitrate: 9600
            }, function(result) {
               // console.log(chrome.runtime.lastError, result);//改变执行结果
                //console.log('123');
               // chrome.serial.send(connectionId, buffer, console.log.bind(console));//发送数据
 
            });
 
        });
    };
 
    chrome.serial.connect('COM3', {//以波特率9600，连接串口3，指定连接函数onConnect
        bitrate: 9600
    }, onConnect);
   
   