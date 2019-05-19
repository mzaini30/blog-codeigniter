{!! $header !!}
<rss version="2.0"
xmlns:dc="http://purl.org/dc/elements/1.1/"
xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
xmlns:admin="http://webns.net/mvcb/"
xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
xmlns:media="http://search.yahoo.com/mrss/"
xmlns:content="http://purl.org/rss/1.0/modules/content/">
 
	<channel>
		<title>Zen</title>
		<link>https://zenlabs.top/</link>
		<description>Menyediakan tutorial pemrograman dengan bahasa sehari-hari</description>
		<dc:language>en-ca</dc:language>
		<dc:creator>muhzaini30@gmail.com</dc:creator>	

		<dc:rights>Copyright {{ $waktu }}</dc:rights>

		@foreach($data as $data)
			
			<item>
				<title>{{ $data->judul }}</title>
				<link>{{ base_url() }}index.php/blog/detail/{{ $data->slug }}</link>
				<guid>{{ base_url() }}index.php/blog/detail/{{ $data->slug }}</guid>
				<pubDate>{{ date('D, d M Y h:i:s +0800', strtotime($data->updated_at)) }}</pubDate>
				<description>
					<![CDATA[
						{{ $data->isi }}
					]]>
				</description>

			</item>

		@endforeach

	</channel>
</rss>