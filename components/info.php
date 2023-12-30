<form action="/rms/php/handleinfo.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="personal_pic" class="form-label">الصورة الشخصية</label>
            <input accept="image/png,image/jpg,image/jpeg" type="file" class="form-control " name="personal_pic" value="">
        </div>
        <div class="mb-3">
            <label for="id_pic" class="form-label">صورة الهوية / اخراج القيد</label>
            <input accept="image/png,image/jpg,image/jpeg" name="id_pic" type="file" class="form-control" value="" >
        </div>
        <div class="mb-3">
            <label for="first_name" class="form-label">الاسم</label>
            <input required name="first_name" type="text" class="form-control " value="">
        </div>
        <div class="mb-3">
            <label for="middle_name" class="form-label">اسم الأب</label>
            <input required name="middle_name" type="text" class="form-control " value="">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">الشهرة</label>
            <input required name="last_name" type="text" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">تاريخ الولادة</label>
            <input required name="birthday" type="date" type="date" class="form-control " >
    </div>
<div class=" mb-3">
            <label for="nationality" class="form-label">الجنسية</label>
            <input required name="nationality" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">العنوان</label>
            <input required name="address" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">العمل</label>
            <input required name="job" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="hoh_job" class="form-label">عمل رب الأسرة</label>
            <input required name="hoh_job" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">الهاتف</label>
            <input required name="phone_number" type="tel" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="hoh_phone_number" class="form-label">هاتف ولي الأمر</label>
            <input required name="hoh_phone_number" type="tel" class="form-control "  value="">
        </div>
        <div class="mb-3">
            <label for="blood_type" class="form-label">فئة الدم</label>
            <select required name="blood_type"  class="form-select " aria-label="Default select example">
                <option selected disabled></option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="education" class="form-label">المستوى التعلمي</label>
            <input required name="education" class="form-control "  aria-describedby="educationHelp" value="">
        </div>
        <div class="mb-3">
            <label for="affiliation_date" class="form-label">تاريخ الإنتساب</label>
            <input required name="affiliation_date" type="date" class="form-control " aria-describedby="affiliation_dateHelp" value="">
        </div>
        <div class="mb-3">
            <label for="scout_rank" class="form-label">الرتبة الكشفية</label>
            <select required name="scout_rank_id"  class="form-select " aria-label="Default select example">
                <option selected disabled></option>
                <option value="جوال">
                    جوال
                </option>
                <option value="رائد رهط">
                    رائد رهط
                </option>
                <option value="الرائد الأكبر">
                    الرائد الأكبر
                </option>
                <option value="معاون قائد">
                    معاون قائد
                </option>
                <option value="مساعد قائد">
                    مساعد قائد
                </option>
                <option selected value="قائد/شيخ العشيرة">
                    قائد/شيخ العشيرة
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
        <input name="form_id" value="2" hidden>
        </form>