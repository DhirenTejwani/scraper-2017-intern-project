#import scrapy
#from amazon.items import AmazonItem
#from scrapy.linkextractors import LinkExtractor
#from scrapy.contrib.spiders import CrawlSpider, Rule
#from scrapy.item import Item, Field

#class MySpider(CrawlSpider):
#    name = 'twitter'
#    allowed_domains = ['twitter.com']
#    start_urls = ['https://www.twitter.com']

#    rules = (Rule(LinkExtractor(), callback='parse_url', follow=False), )

 #   def parse_url(self, response):
  #      item = MyItem()
  #      item['url'] = response.url
  #      return item