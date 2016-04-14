@extends('layouts.app')

@section('content')
	<div class="col-md-3">
		@include('home.partials.homenav')
		@include('home.partials.news1')
	</div>
	<div class="col-md-6">
		<div class="panel">
			<img src="./images/11.jpg" class="img-responsive" style="height: 150%;" alt="广告位">
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<strong class="panel-title">网站主页</strong>				
			</div>
			<div class="panel-body">
				<p style="text-indent: 2em; line-height: 2em;"><span style="font-size: 14px;">广州喀秋莎文化发展有限公司(</span><a href="#" tppabs="http://www.gdshzsh.com/" style="font-size: 14px; text-decoration: underline;"><span style="font-size: 14px;">WWW.KQSGZ.COM</span></a><span style="font-size: 14px;">)俄语培训中心凭借公司与俄罗斯商界/政界多年的紧密合作，以及俄罗斯政府旗下推广俄罗斯文化的机构“俄罗斯世界”的加盟（”俄罗斯世界”相当于中国的孔子学院)。倾力打造以广州为基地辐射全国的专业俄语培训机构，是广州市面上唯一一家专注于俄语教育的品牌机构。</span></p>
                <p style="text-indent: 2em; line-height: 2em;"><span style="font-size: 14px;">我中心以俄籍教员为主，辅以中国老师，让学员足不出国门就能以最低的成本身临其境地学到最纯正、最地道的俄语。有研究资料表明：婴幼儿时期学习语言能力是超强的，并且能同时学会多国语言，只要照顾他的父母或保姆讲不同的语言，婴儿就会跟着模仿学说，很快也会掌握多种语言。因为有这样的语言环境，婴儿天天浸泡在这样的语言氛围中，你想让他不会都难。而我中心正是根据这个原理打造一流的俄语学习培训中心，让所有的学员一进来就仿佛到了俄罗斯这个国家，周围都是俄罗斯人，他们讲的都是俄语。你耳边每时每刻听到的也都是俄语，以营造一个真实的语言环境，促使学员以最快的速度努力融入这个学习环境，经过一段时间的浸润、熏陶，哪怕是零基础的学员，在俄籍老师耐心细致、循循善诱的教导下，也可以在很短时间内学会俄语。实践证明：零基础学员在我中心学习仅3个月就可以轻松找到底薪3千元以上的工作，5个月就可实现商务洽谈。</span></p>
                <p style="text-indent: 2em; line-height: 2em;"><span style="font-size: 14px;">我中心近年来在培养中国学生学俄语方面积累了极其丰富的经验，俄籍老师都是俄罗斯正规高等院校语言文学类专业毕业...<a href="-c=msg&id=153.htm" tppabs="http://www.kqsgz.com/?c=msg&id=153" target="_self" style="color: rgb(255, 0, 0); text-decoration: underline;"><span style="font-size: 14px; color: rgb(255, 0, 0);"><strong>[查看详细]</strong></span></a>
                    </span>
                </p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		@include('home.partials.news')
		@include('home.partials.contact')
	</div>
@stop