#!/usr/bin/env python3

from flask import Flask, abort, request, render_template_string, render_template
import jinja2, re, hashlib

app = Flask(__name__, template_folder=".")

@app.route('/')
def home():
    return render_template('./index.html')

@app.route('/spells', methods=['GET'])
def sp3ll5():
    spell = request.args.get("get", None) 
    if spell is None:
        return "<center><body style='background-color:RebeccaPurple;color:yellow;'><h2><i>What kind of spells you'd like to get??</i></h2></body></center>"
    else:
        blacked = [".","_","[","]"]
        for x in blacked:
            if x in spell:
                return "<center><h1>Not today!!</h1></center>"
        else:
            template = '''
                    <!DOCTYPE html>
                    <html>
                        <head>
                        <title>Spells</title>
                        </head>
                        <body>
                        <center>
                        <p>You need the flag to get the "''' + spell + '''" spelling</p>
             <p style="color:yellow; background-color:purple;">NOPE.</p>
            </center>
            </body>
            </html>'''
            return render_template_string(template)

if __name__ == '__main__':
        app.run(host='0.0.0.0', port=5000)
