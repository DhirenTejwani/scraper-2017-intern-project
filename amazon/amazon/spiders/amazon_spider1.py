# -*- coding: utf-8 -*-
import scrapy
import cx_Oracle
from amazon.items import AmazonItem
from scrapy.linkextractors import LinkExtractor

class AmazonProductSpider(scrapy.Spider):
 name = "coolpad"
 allowed_domains = ["www.amazon.in"]
  
  #Use working product URL below
 start_urls = ["http://www.amazon.in/Coolpad-Note-Royal-Gold-32/dp/B01FM7H0K8/ref=sr_1_5?s=electronics&ie=UTF8&qid=1497943022&sr=1-5&keywords=redmi+note+4+64+gb"]
 
 def parse(self, response):
  con = cx_Oracle.connect('Dhiren/Dbhjpt1@127.0.0.1/xe')
  cursor = con.cursor()
  items = AmazonItem()	
  extractor = LinkExtractor(allow_domains='amazon.in')
  links = extractor.extract_links(response)
 #  title = response.xpath('//*[@id="rev-dpReviewsMostHelpfulAUI-R1GC3CZRYZE7LY"]/div[1]/div/a[2]/span').extract()
 #  sale_price = response.xpath('//span[contains(@id,"ourprice") or contains(@id,"saleprice")]/text()').extract()
 #  category = response.xpath('//a[@class="a-link-normal a-color-tertiary"]/text()').extract()
 #  availability = response.xpath('//div[@id="availability"]//text()').extract()
   #review = response.xpath('//*[@id="revData-dpReviewsMostHelpfulAUI-R2BCSE4PLKSH7M"]/div/text()').extract()
   #y = 0
#  s = response.xpath('//*[@id="productTitle"]/text()').extract
#  print (s)  
#	for link in links:
#		print link.url
  for link in response.xpath('//*[@id="revMHRL"]/div'):

#	if "J7-Prime" in response.url:
#   items['product_review_j7'] = link.xpath('.//div[@class="a-section"]/text()').extract()
#   cursor.execute("insert into reviews(review) values ('" + ''.join(link.xpath('.//div[@class="a-section"]/text()').extract())+ "')")
   t=''.join(link.xpath('.//div/div/a[2]/span/text()').extract())
   r=''.join(link.xpath('.//div[@class="a-section"]/text()').extract())
   print (t)
   cursor.execute("insert into reviews(review) values ('" + r + "')")
   con.commit()
   
  cursor.close()
  con.close()
#	else:
#		items['product_review_navy'] = link.xpath('.//div[@class="a-section"]/text()').extract()
	#items['product_review'] = ''.join(review).strip()
	#items['y'] = link.xpath('.//div[@class="a-section"]/text()').extract()
#   yield items
        #y = link.xpath('@href').extract()
		#print y
		
   
 #  items['product_name'] = ''.join(title).strip()
 #  items['product_sale_price'] = ''.join(sale_price).strip()
 #  items['product_category'] = ','.join(map(lambda x: x.strip(), category)).strip()
 #  items['product_availability'] = ''.join(availability).strip()
   
   
  
  #//*[@id="revData-dpReviewsMostHelpfulAUI-R2BCSE4PLKSH7M"]/div
  #//*[@id="revData-dpReviewsMostHelpfulAUI-R1GC3CZRYZE7LY"]/div
  
  #///*[@id="revMH"]