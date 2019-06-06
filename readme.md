api所有接口表
id
platform varchar 20  平台
type  varchar 15     future spot 等等   
method    varchar 15  请求类型
url    varchar 255 请求地址
data  test   镜像数据josn保存
created_at
updated_up

api_data接口数据表存储
id
api_id  外键
user_id 外键
order_id  可以为空
client_id   可以为空
content 存储数据josn格式保存


strategy 策略表
id
api_id
user_id 外键
content 存储数据josn格式保存


log 日志表
id
api_id  外键
user_id 外键
content 存储内容


$host='http://exchanges-tools.coin/bitmex/uid';

$host='http://exchanges-tools.coin/binance/uid';

$host='http://exchanges-tools.coin/okex/spot/uid';
$host='http://exchanges-tools.coin/okex/future/uid';

$host='http://exchanges-tools.coin/huobi/spot/uid';
$host='http://exchanges-tools.coin/huobi/future/uid';

$exchanges=new Exchanges('bitmex',$key,$secret,$extra,$host);
$bitmex=new Bitmex($key,$secret,$host);
