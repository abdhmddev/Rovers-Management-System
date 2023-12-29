<form action="">
        <div class="mb-3">
            <label for="personal_pic" class="form-label">الصورة الشخصية</label>
            <input accept="image/png,image/jpg,image/jpeg" type="file" class="form-control " id="personal_pic" value="">
        </div>
        <div class="mb-3">
            <label for="id_pic" class="form-label">صورة الهوية / اخراج القيد</label>
            <input accept="image/png,image/jpg,image/jpeg" name="id_pic" type="file" class="form-control " id="id_pic" value="">
        </div>
        <div class="mb-3">
            <label for="first_name" class="form-label">الاسم</label>
            <input required name="first_name" type="text" class="form-control " id="first_name" value="">
        </div>
        <div class="mb-3">
            <label for="middle_name" class="form-label">اسم الأب</label>
            <input required name="middle_name" type="text" class="form-control " id="middle_name" value="">
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">الشهرة</label>
            <input required name="last_name" type="text" class="form-control " id="last_name" value="">
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">تاريخ الولادة</label>
            <input required name="birthday" type="date" value=2006-01-04 min=1900-01-01 00:00:00} max="2023-12-27 14:40:27" type="date" class="form-control " id="birthday"">
    </div>
<div class=" mb-3">
            <label for="nationality" class="form-label">الجنسية</label>
            <input required name="nationality" class="form-control " id="nationality" value="">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">العنوان</label>
            <input required name="address" class="form-control " id="address" value="">
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">العمل</label>
            <input required name="job" class="form-control " id="job" value="">
        </div>
        <div class="mb-3">
            <label for="hoh_job" class="form-label">عمل رب الأسرة</label>
            <input required name="hoh_job" class="form-control " id="hoh_job" value="">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">الهاتف</label>
            <input required name="phone_number" type="tel" class="form-control " id="phone_number" value="">
        </div>
        <div class="mb-3">
            <label for="hoh_phone_number" class="form-label">هاتف ولي الأمر</label>
            <input required name="hoh_phone_number" type="tel" class="form-control " id="hoh_phone_number" value="">
        </div>
        <div class="mb-3">
            <label for="blood_type" class="form-label">فئة الدم</label>
            <select required name="blood_type" id="blood_type" class="form-select " aria-label="Default select example">
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
            <input required name="education" class="form-control " id="education" aria-describedby="educationHelp" value="">
        </div>
        <div class="mb-3">
            <label for="affiliation_date" class="form-label">تاريخ الإنتساب</label>
            <input required name="affiliation_date" type="date" class="form-control " id="affiliation_date" aria-describedby="affiliation_dateHelp" value="">
        </div>
        <div class="mb-3">
            <label for="scout_rank" class="form-label">الرتبة الكشفية</label>
            <select required name="scout_rank_id" id="scout_rank" class="form-select " aria-label="Default select example">
                <option disabled></option>
                <option value="1">
                    جوال
                </option>
                <option value="2">
                    رائد رهط
                </option>
                <option value="3">
                    الرائد الأكبر
                </option>
                <option value="4">
                    معاون قائد
                </option>
                <option value="5">
                    مساعد قائد
                </option>
                <option selected value="10">
                    قائد/شيخ العشيرة
                </option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
        <input name="form_id" value="2" hidden>
        </form>