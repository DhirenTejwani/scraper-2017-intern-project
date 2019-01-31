# -*- coding: utf-8 -*-
import scrapy
import cx_Oracle
from amazon.items import AmazonItem
import html
from scrapy.linkextractors import LinkExtractor

class AmazonProductSpider(scrapy.Spider):
 name = "c7pro"
 allowed_domains = ["www.amazon.in"]
  
  #Use working product URL below
 start_urls = ["http://www.amazon.in/Samsung-Galaxy-Navy-Blue-64GB/dp/B01LXMHNMQ/ref=sr_1_4?s=electronics&ie=UTF8&qid=1499496898&sr=1-4&keywords=samsung"]
 
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
  #n = ''.join(response.xpath('//*[@id="summaryStars"]/a/text()').extract())
  n5 = ''.join(response.xpath('//*[@id="histogramTable"]//tbody/tr[1]/td[3]//text()').extract())
  n6 = ''.join(response.xpath('//*[@id="avgRating"]/span/text()').extract())
  
 # print ("n is" + n)
  print ("n5 is" + str(len(n5)))
  new = float(n6[5:8])*20
  print ("n6 is" + str(new) )
  
  cursor.execute("UPDATE ratings set overall =" + str(new) + " where upper(site)='AMAZON' ")
  con.commit()
#  print (s)  
#	for link in links:
#		print link.url
  for link in response.xpath('//*[@id="revMHRL"]/div'):

#	if "J7-Prime" in response.url:
#   items['product_review_j7'] = link.xpath('.//div[@class="a-section"]/text()').extract()
   t=''.join(link.xpath('.//div/div/a[2]/span/text()').extract())
   r=''.join(link.xpath('.//div[@class="a-section"]/text()').extract())
   h1= html.escape(t)
   h2= html.escape(r)
#   print (h)
#   cursor.execute("insert into reviews(site,review,phone,title) values ('Amazon','" + h2 + "','C7pro','"+ h1 +"')")
#  cursor.execute("insert into ratings(site,phone,rating) values ('Amazon','" + ''.join(link.xpath('.//div/div/a[2]/span').extract())+ "','')")
#   cursor.execute("insert into reviews(review) values ('" + ''.join(link.xpath('.//div[@class="a-section"]/text()').extract()) + "')")
   con.commit()
   
  cursor.close()
  con.close()
#	else:.//div/div/a[2]/span
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