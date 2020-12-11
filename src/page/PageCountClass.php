<?php
namespace PageCount;

class PageCountClass
{
	public static function pageCounts()
	{
		/*
		  * 网站计数器
		*/
		$counterFile = "count.dat";//存储计数的文件
		if(!file_exists($counterFile))//如果文件不存在
		{
			$counter = 0;//访问网站的人最初为零
			//打开$counterfile w表示只写。打开并清空文件的内容；如果文件不存在，则创建新文件。
			$cfile = fopen($counterFile,"w");
			fputs($cfile,'0');//fputs()和fwrite()是一样的，表示写入打开的文件
			fclose($cfile);//关闭文件
		}else{
			$cfile = fopen($counterFile,"r");
			//fgets表示从文件中读取一行，10为长度，trim（）是去除空白
			$counter = trim(fgets($cfile,11));
			fclose($cfile);
		}
		$counter++;//访问每次加一
		$cfile = fopen($counterFile,"w");
		fputs($cfile,$counter);
		fclose($cfile);
		return $counter;
	}
}