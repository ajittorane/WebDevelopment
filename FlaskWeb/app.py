from flask import Flask, render_template, request, redirect, url_for


app = Flask(__name__)

# --- Login Page ---
@app.route('/')
def login():
    return render_template('index.html')


# --- Login Validation ---
@app.route('/login', methods=['POST'])
def do_login():
    username = request.form['username']
    password = request.form['password']

    # Simple check (you can replace with DB validation)
    if username == 'admin' and password == '12345':
        return redirect(url_for('dashboard.html'))
    else:
        return render_template('index.html', error="Invalid username or password!")



# --- Dashboard Page ---
@app.route('/dashboard.html')
def dashboard():
    return render_template('dashboard.html')



#---Card section ----
@app.route('/base.html')
def base():
    return render_template('base.html')



# --- Logout ---
@app.route('/')
def logout():
    return redirect(url_for('index.html'))




if __name__ == '__main__':
    app.run(debug=True)
