from app import app, db
from student.student import student_blueprint
from university.university import university_blueprint

app.register_blueprint(student_blueprint, url_prefix='/student')
app.register_blueprint(university_blueprint, url_prefix='/university')
with app.app_context():
    db.create_all()

if __name__ == '__main__':
    app.run()



