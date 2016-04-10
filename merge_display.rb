#encoding: utf-8
begin
  header_script = "//---
// display.js - Script d'affichage de Community Script Project
"
  content_script = ""

  Dir["display.*.js"].each do |filename|
    File.open(filename, "rb") do |f|
      data = f.read(f.size)
      header, content = data.split("//---\r\n\r\n",2)
      if(content == nil)
        content, header = header+"\r\n", "//---\r\n// #{filename} - Sans header...\r\n//---\r\n"
      else
        content<<"\r\n"
        header<<"//---\r\n"
      end
      header_script<<header
      content_script<<content
    end
  end

  header_script<<"\r\n"
  header_script<<content_script
  File.open("display.js","wb") do |f| f.write(header_script) end
rescue Exception
  print $!
  system("pause")
end