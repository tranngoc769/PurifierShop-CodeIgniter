from selenium import webdriver
import  time

from selenium.webdriver.common.keys import Keys
from bs4 import BeautifulSoup
from selenium import webdriver
import os
import re
options = webdriver.ChromeOptions()
options.add_argument("--ignore-certificate-error")
options.add_argument("--ignore-ssl-errors")
options.add_argument('-headless')
options.add_argument('-no-sandbox')
options.add_argument('--disable-gpu')
options.add_argument('--log-level=3')
options.add_argument('-disable-dev-shm-usage')
wd = webdriver.Chrome('chromedriver.exe',options=options)
# 
from configparser import ConfigParser
config_object = ConfigParser()
wp_option = webdriver.ChromeOptions()
wp_option.add_argument("--ignore-certificate-error")
wp_option.add_argument("--ignore-ssl-errors")
#wp_option.add_argument('-headless')
wp_option.add_argument('-no-sandbox')
wp_option.add_argument('--disable-gpu')
wp_option.add_argument('--log-level=3')
wp_option.add_argument('-disable-dev-shm-usage')
wordpress = webdriver.Chrome('chromedriver.exe',options=wp_option)
username = None
password = None
wphost = None
wpupload = None
src_text = None
def splitString(input):
    x = 500
    res=[input[y-x:y] for y in range(x, len(input)+x,x)]
    return res
def init():
    global username,password,wphost,src_text,wpupload
    config = None
    try:
        config_object.read("config.ini", encoding='utf-8')
        config = config_object["APPLICATION_CONFIG"]
    except Exception as err:
        print("Cannot read config.ini "+ str(err))
        return False
    try:
        username = config["username"]
        password = config["password"]
        wphost = config["wphost"]
        wpupload = config["wpupload"]
        src_text = config["src_text"]
        return True
    except Exception as err:
        return False
# Wordpress Auto
def openLogin():
    global wordpress
    try:
        wordpress.get(wphost)
        wordpress.find_element_by_xpath("//input[@id='user_login']").send_keys(username)
        wordpress.find_element_by_xpath("//input[@id='user_pass']").send_keys(password)
        wordpress.find_element_by_xpath("//input[@id='wp-submit']").click()
        if (wordpress.find_element_by_xpath("//span[@class='display-name']").text != username):
            return False
    except:
        return False
    return True
def upStory(story):
    global wordpress
    try:
        wordpress.get(wphost)
        wordpress.find_element_by_xpath("//input[@id='user_login']").send_keys(username)
        wordpress.find_element_by_xpath("//input[@id='user_pass']").send_keys(password)
        wordpress.find_element_by_xpath("//input[@id='wp-submit']").click()
        if (wordpress.find_element_by_xpath("//span[@class='display-name']").text != username):
            return False
    except:
        return False
    return True
    pass
# 
def getListUrl(path = "url.txt"):
    listString = []
    with open(path, encoding="UTF-8", mode="r") as f:
        listString = f.readlines()
        listString = [x.strip() for x in listString]
    return listString
def getChapter(text):
    pos = text.find(':')
    if (pos== -1): pos = len(text)
    chap = text[0:pos]
    return [int(s) for s in chap.split() if s.isdigit()][0]
def getListChapter(url):
    global wd
    print("Waiting for init chrome driver")
    wd.get(url)
    soup = BeautifulSoup(wd.page_source, features="lxml")
    isPanigation = soup.find_all('li', {'class','chap'})
    listChap = []
    if len(isPanigation) != 0:
        for item in isPanigation:
            a_url = item.find_all('a')
            if (len(a_url)>0):
                a_href = a_url[0].attrs['href']
            listChap.append(a_href)
    return listChap
import re
def getTextOfPage(storyName, chapter): #url, laohac,15
    global wd
    print("Crawl : "+ chapter)
    if os.path.isdir(storyName) == False:
        os.mkdir(storyName)
    temp = chapter.split("/")
    temp = temp[len(temp)-1].replace("-","")
    chapterName = storyName+"/"+temp+".txt"
    if os.path.isfile(chapterName) == True:
        return
    wd.get(chapter)
    soup = BeautifulSoup(wd.page_source, features="lxml")
    items = soup.find_all('div', {'class','w3-justify chapter-content detailcontent' })[0]
    title = soup.find_all('i', {'class','fa fa-pencil-square-o' })[0].next
    print(title)
    data = str(items).replace("\n","").replace('\\','').replace('</div>','').replace('<div class="w3-justify chapter-content detailcontent" id="content">','').replace("<br/><br/>","<br/>").replace("<br/> <br/>","<br/>")
    temp = data.split("<br/>")
    content = '<div class="w3-justify chapter-content detailcontent" id="content">'
    for item in temp:
        content += '<p class="block_8">' + item.strip() + "</p>\n";
    content += "</div>"
    writeFile(chapterName, title+"\n"+ content)
    upload(chapterName)
def writeFile(filename, content):
    with open(filename, 'w', encoding="UTF-8") as writer:
        writer.write(content)
def crawStoryUrl(url, dirout = "textdir"):
    if os.path.isdir(dirout) == False:
        os.mkdir(dirout)
    if (url[len(url)-1] != "/"):
        url += "/"
    temp = url.split("/")
    storyName = dirout + "/" + temp[len(temp)-2].replace("-","")
    listChap = getListChapter(url)

    # chapter = "https://truyenchuth.com/truyen-toi-cuong-trang-buc-da-kiem-he-thong/chuong-1632-phun-chet-nguoi.html"
    # exp : 81
    for chapter in listChap:
        try:
            getTextOfPage(storyName,chapter)
        except Exception as err:
            print("Error : " + str(err))
dirname = "textdir"
urlPath = 'url.txt'
# main(url)
def upload(path = "textdir/truyentoicuongtrangbucdakiemhethong\chuong1tacohethongtatoitreo.html.txt"):
    with open(path, 'r', encoding="UTF-8") as reader:
        contents = reader.readlines()
        title = contents[0]
        data  = contents[1]
        data = "<h3>"+title+"</h3>" +"<h3>"+src_text+"</h3>" + data
        # data = "xxxxxxxxxxxxxxxxxxxxx"
        # list_contents = splitString(data)
        try:
            wordpress.get(wpupload)
            try:
                wordpress.find_element_by_xpath("//button[(@class='components-button has-icon') and (@aria-label='Đóng hộp thoại')]").click()
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//button[@class='components-button block-editor-inserter__toggle has-icon']").click()
            except:
                pass
            wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title']")
            try:
                wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title']")
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//input[@id='block-editor-inserter__search-0'] ").send_keys('HTML')
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title' and text()='HTML'] ").click()
            except:
                pass
            wordpress.find_element_by_xpath("//textarea[@class='editor-post-title__input']").send_keys(Keys.CONTROL, 'a', Keys.BACKSPACE)
            wordpress.find_element_by_xpath("//textarea[@class='editor-post-title__input']").send_keys(title)
            wordpress.find_element_by_xpath("//textarea[@class='block-editor-plain-text']").send_keys(Keys.CONTROL, 'a', Keys.BACKSPACE)
            
            wordpress.execute_script('var x = document.getElementsByClassName("block-editor-plain-text")[0]; x.value =`' +data+ '`')
            wordpress.find_element_by_xpath("//textarea[@class='block-editor-plain-text']").send_keys(".")
        except:
            openLogin();
            wordpress.get(wpupload)
            try:
                wordpress.find_element_by_xpath("//button[(@class='components-button has-icon') and (@aria-label='Đóng hộp thoại')]").click()
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//button[@class='components-button block-editor-inserter__toggle has-icon']").click()
            except:
                pass
            wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title']")
            try:
                wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title']")
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//input[@id='block-editor-inserter__search-0'] ").send_keys('HTML')
            except:
                pass
            try:
                wordpress.find_element_by_xpath("//span[@class='block-editor-block-types-list__item-title' and text()='HTML'] ").click()
            except:
                pass
            wordpress.find_element_by_xpath("//textarea[@class='editor-post-title__input']").send_keys(Keys.CONTROL, 'a', Keys.BACKSPACE)
            wordpress.find_element_by_xpath("//textarea[@class='editor-post-title__input']").send_keys(title)
            wordpress.find_element_by_xpath("//textarea[@class='block-editor-plain-text']").send_keys(Keys.CONTROL, 'a', Keys.BACKSPACE)
            wordpress.execute_script('var x = document.getElementsByClassName("block-editor-plain-text")[0]; x.value =`' +data+ '`')
            wordpress.find_element_by_xpath("//textarea[@class='block-editor-plain-text']").send_keys(".")
        time.sleep(200)
        wordpress.find_element_by_xpath("//button[@class='components-button editor-post-publish-panel__toggle editor-post-publish-button__button is-primary']").click()
        wordpress.find_element_by_xpath("//div[@class='editor-post-publish-panel__header-publish-button']").click()
if __name__ == "__main__":
    init()
    openLogin()
    listUrl = getListUrl(urlPath)
    for url in listUrl:
        print("Story path : "+url)
        try:
            crawStoryUrl(url)
        except Exception as err:
            print("Error : " + str(err))
    